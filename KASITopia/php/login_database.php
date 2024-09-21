<?php
$login = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $invalid = 0; // Reset $invalid to 0 before checking email and password
    include 'php/connect.php';

    // Ensure session is started
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Get and sanitize input
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (!empty($email) && !empty($password)) {
        // Prepare statement to prevent SQL injection
        $sql = "SELECT * FROM `registration` WHERE email = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($result) {
                $num = mysqli_num_rows($result);
                if ($num > 0) {
                    $row = mysqli_fetch_assoc($result);
                    if (password_verify($password, $row['password'])) {
                        $login = 1;
                        $_SESSION['email'] = $email;
                        $_SESSION['userID'] = $row['UserID']; // Store user ID and major in session
                        $_SESSION['major'] = $row['Major'];
                        $_SESSION['phone'] = $row['phoneNO'];

                    } else {
                        $invalid = 1;
                    }
                } else {
                    $invalid = 1;
                }
            } else {
                // Handle query error
                echo "Error executing query.";
            }
            mysqli_stmt_close($stmt);
        } else {
            // Handle statement preparation error
            echo "Error preparing statement.";
        }
    } else {
        $invalid = 1;
    }

    mysqli_close($conn);
}
?>