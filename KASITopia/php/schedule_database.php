<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$submitted = 0;
$fullyBooked = 0;
$fields=0;
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    include 'connect.php';

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Initialize and sanitize inputs
    $faculty_obligatory = isset($_POST['obligatory']) ? implode(", ", array_map('htmlspecialchars', $_POST['obligatory'])) : '';
    $obligatory_specialty = isset($_POST['obligatory_specialty']) ? implode(", ", array_map('htmlspecialchars', $_POST['obligatory_specialty'])) : '';
    $elective_specialty = isset($_POST['elective_specialty']) ? implode(", ", array_map('htmlspecialchars', $_POST['elective_specialty'])) : '';
    $hardness = isset($_POST['hardness']) ? htmlspecialchars($_POST['hardness']) : '';
    $hours = isset($_POST['hours']) ? htmlspecialchars($_POST['hours']) : '';
    $semester = isset($_POST['semester']) ? htmlspecialchars($_POST['semester']) : '';
    $userID = $_SESSION['userID']; // Get user ID from session
    $userEmail = $_SESSION['email']; // Get user's email from session
    $userPhone = $_SESSION['phone'];
    $userMajor = $_SESSION['major']; // Get user's major from session

    // Validate required fields
    if ($faculty_obligatory && $obligatory_specialty && $elective_specialty && $hardness && $hours && $semester) {
        // Prepare and bind SQL statement to insert into schedule table
        $stmt = $conn->prepare("INSERT INTO schedule (UserID, faculty_obligatory, obligatory_specialty, elective_specialty, hardness, creditHours, semester) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssiis", $userID, $faculty_obligatory, $obligatory_specialty, $elective_specialty, $hardness, $hours, $semester);

        // Execute the statement
        if ($stmt->execute()) {
            // Fetch a guide's email whose major is similar to the user's major
            $guideQuery = "SELECT Email, phoneNO FROM guides_list WHERE scheduleRequest < 10 AND Major = ?";
            $guideStmt = $conn->prepare($guideQuery);
            $guideStmt->bind_param("s", $userMajor);
            $guideStmt->execute();
            $result = $guideStmt->get_result();
            if ($result->num_rows > 0) {
                $guideRow = $result->fetch_assoc();
                $guideEmail = $guideRow['Email'];
                $guidePhone = $guideRow['phoneNO'];

                $sql2 = "UPDATE guides_list SET scheduleRequest = scheduleRequest + 1 WHERE Email = ?";
                $stmt2 = $conn->prepare($sql2);
                $stmt2->bind_param("s", $guideEmail);
                $result2 = $stmt2->execute();

                require("../mailing/script.php");
                $subjectGuide = "New Booking Appointment";
                $messageGuide = "
                <html>
                <head>
                <title>New Booking Appointment</title>
                </head>
                <body>
                <h2>New Schedule Recommendation Request</h2>
                <p>You have a new schedule request. Here are the details and the courses that the user already took:</p>
                <ul>
                    <li><strong>User Email:</strong> $userEmail</li>
                    <li><strong>User Phone Number:</strong> $userPhone</li>
                    <li><strong>Faculty Obligatory courses:</strong> $faculty_obligatory </li>
                    <li><strong>Obligatory specialty courses:</strong> $obligatory_specialty</li>
                    <li><strong>Elective specialty courses:</strong> $elective_specialty</li>
                    <li><strong>Hardness:</strong> $hardness</li>
                    <li><strong>Schedule desired hours:</strong> $hours</li>
                    <li><strong>Semester:</strong> $semester</li>
                </ul>
                <p>Please recommend a schedule for this user according to the sent data, and send it to the user email or to the user WhatsApp.</p>
                </body>
                </html>
                ";
                $responseGuide = sendMail($guideEmail, $subjectGuide, $messageGuide);

                if ($result2) {
                    header("Location: ../schedule.php?submitted=1");
                    exit();
                } else {
                    echo "Failed to update guide's schedule request count: " . mysqli_error($conn);
                }
            } else {
                header("Location: ../schedule.php?fullyBooked=1");
                exit();

            }

            if ($result) {
                header("Location: ../schedule.php?submitted=1");
            } else {
                header("Location: ../schedule.php?submitted=0");
                echo "Failed to insert into schedule: " . mysqli_error($conn);
            }
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement and database connection
        $stmt->close();
        $conn->close();
    } else {
        header("Location: ../schedule.php?fields=1");
        exit();

    }
} else {
    echo "Form submission method is not POST.";
}
