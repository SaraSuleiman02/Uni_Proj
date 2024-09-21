<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include 'connect.php';

    $booked = 0;
    $dayError = 0;
    $fullyBooked = 0;

    // Get and sanitize input
    $gender = isset($_POST['Gender']) ? trim($_POST['Gender']) : '';
    $language = isset($_POST['language']) ? trim($_POST['language']) : '';
    $bookingTime = isset($_POST['bookingTime']) ? trim($_POST['bookingTime']) : '';
    $bookingDay = isset($_POST['bookingDay']) ? trim($_POST['bookingDay']) : '';
    $userID = $_SESSION['userID']; // Get user ID from session

    // Get current day (1 for Sunday, 2 for Monday, ..., 7 for Saturday)
    $pcDay = date('N');
    $pcDay = $pcDay == 7 ? 1 : $pcDay + 1; // Convert from Monday-based to Sunday-based

    // Check if bookingDay is not equal to or less than pcDay
    if ($bookingDay <= $pcDay) {
        header("Location: ../guide.php?dayError=1");
        exit();
    }

    // Convert bookingDay from number to day name
    switch ($bookingDay) {
        case 1:
            $bookingDay = "Sunday";
            break;
        case 2:
            $bookingDay = "Monday";
            break;
        case 3:
            $bookingDay = "Tuesday";
            break;
        case 4:
            $bookingDay = "Wednesday";
            break;
        case 5:
            $bookingDay = "Thursday";
            break;
        case 6:
            $bookingDay = "Friday";
            break;
        case 7:
            $bookingDay = "Saturday";
            break;
    }

    if (!empty($gender) && !empty($bookingTime) && !empty($bookingDay)) {
        // Prepare statement to prevent SQL injection
        $sql = "INSERT INTO `booking_guide` (UserID, guideGender, bookingTime, bookingDay) VALUES (?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "isss", $userID, $gender, $bookingTime, $bookingDay);
            $result = mysqli_stmt_execute($stmt);

            // Sending email confirmation to the user
            $userEmail = $_SESSION['email'];
            $userPhone = $_SESSION['phone'];

            // $bookingDay2 = $bookingDay;
            // if ($bookingDay2 == "Sunday" || $bookingDay2 == "Tuesday" || $bookingDay2 == "Thursday") {
            //     $bookingDay2 = "S/T/TH";
            // } else {
            //     $bookingDay2 = "M/W";
            // }

            $guideQuery = "";
            $guideStmt = "";
            if ($language == 'Arabic') {
                $guideQuery = "SELECT Email, phoneNO, bookingNO FROM guides_list WHERE Guide_gender = ? AND freeDay = ? AND freeHour = ? AND (language = 'Arabic' OR language = 'English/Arabic')";
                $guideStmt = $conn->prepare($guideQuery);
                $guideStmt->bind_param("sss", $gender, $bookingDay, $bookingTime);
                $guideStmt->execute();
                $result1 = $guideStmt->get_result();
            } else {
                $guideQuery = "SELECT * FROM guides_list WHERE Guide_gender = ? AND freeDay = ? AND freeHour = ? AND language = 'English/Arabic'";
                $guideStmt = $conn->prepare($guideQuery);
                $guideStmt->bind_param("sss", $gender, $bookingDay, $bookingTime);
                $guideStmt->execute();
                $result1 = $guideStmt->get_result();
            }

            if ($result1->num_rows > 0) { //if a guide is available
                $guideRow = $result1->fetch_assoc();

                print_r($guideRow);
                $guideEmail = $guideRow['Email'];
                $guidePhone = $guideRow['phoneNO'];
                $bookingNO = $guideRow['bookingNO'];
                $GuideID = $guideRow['GuideID'];
                echo " GuideID : $GuideID, userID : $userID";

                if ($bookingNO > 10) {
                    header("Location: ../guide.php?fullyBooked=1");
                    exit();
                }

                $sql2 = "UPDATE guides_list SET bookingNO = bookingNO + 1 WHERE Email = ?";
                $stmt = $conn->prepare($sql2);
                $stmt->bind_param("s", $guideEmail);
                $result2 = $stmt->execute();

                // $sql3 = "UPDATE booking_guide SET GuideID = '$GuideID' WHERE UserID = '$userID'";

                // User email confirmation
                // require("../mailing/script.php");
                // $subjectUser = "Guide Booking Confirmation";
                // $messageUser = "
                // <html>
                // <head>
                // <title>Guide Booking Confirmation</title>
                // </head>
                // <body>
                // <h2>Guide Booking Confirmation</h2>
                // <p>Thank you for booking a guide with us. Here are your booking details:</p>
                // <ul>
                // <li><strong>Guide Gender:</strong> $gender</li>
                // <li><strong>Booking Time:</strong> $bookingTime</li>
                // <li><strong>Booking Day:</strong> $bookingDay</li>
                // <li><strong>Guide Phone number:</strong> $guidePhone</li>
                // <li><strong>Guide Email:</strong> $guideEmail</li>
                // <li><strong>Meeting Place:</strong> GF floor</li>
                // <li><strong>Tour Duration:</strong> 1 hour</li>
                // </ul>
                // <p>If you have any questions or need to make changes to your booking, please feel free to contact us.</p>
                // </body>
                // </html>
                
                //     ";
                // $responseUser = sendMail($userEmail, $subjectUser, $messageUser);

                // // Sending email confirmation to the guide
                // $subjectGuide = "New Booking Appointment";
                // $messageGuide = "
                //     <html>
                //     <head>
                //     <title>New Booking Appointment</title>
                //     </head>
                //     <body>
                //     <h2>New Booking Appointment</h2>
                //     <p>You have a new booking appointment. Here are the details:</p>
                //     <ul>
                //         <li><strong>User Email:</strong> $userEmail</li>
                //         <li><strong>User Phone Number:</strong> $userPhone</li>
                //         <li><strong>Booking Time:</strong> $bookingTime</li>
                //         <li><strong>Booking Day:</strong> $bookingDay</li>
                //         <li><strong>Meeting Place:</strong> GF floor</li>
                //         <li><strong>Tour Duration:</strong> 1 hour</li>
                //     </ul>
                //     <p>Please prepare accordingly and feel free to reach out to the user for any further details or changes.</p>
                //     </body>
                //     </html>
                //     ";
                // $responseGuide = sendMail($guideEmail, $subjectGuide, $messageGuide);
            } else {
                header("Location: ../guide.php?fullyBooked=1");
                exit();
            }

            // if ($result) {
            //     header("Location: ../guide.php?booked=1");
            // } else {
            //     header("Location: ../guide.php?booked=0");
            //     echo "failed: " . mysqli_error($conn);
            // }

            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required.";
    }

    mysqli_close($conn);
}
