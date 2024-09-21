<?php
$invalid = 0;
$reset = 0;
$blocked = 0;
$showNewPasswordPopup = 0;
$resendSuccess = 0; // Flag for successful resend

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'php/connect.php';
    session_start();
    if (isset($_SESSION['reset_email'])) {
        $email = $_SESSION['reset_email'];
    }

    // --------------------------- checking if the verification match ---------------------------

    if (isset($_POST['verification'])) {
        $verificationCode = $_POST['verification'];
        $sql = "SELECT * FROM `registration` WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                $row = mysqli_fetch_assoc($result);
                if ($row['verification'] == $verificationCode) {
                    $showNewPasswordPopup = 1;
                } else {
                    $blocked = 1;
                }
            }
        } else {
            die(mysqli_error($conn));
        }
    }

    // --------------------------- changing the password ---------------------------
    if (isset($_POST['password']) && isset($_POST['confirm'])) {
        $sql = "SELECT * FROM `registration` WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                $row = mysqli_fetch_assoc($result);
                $password = $_POST['password'];
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                if (password_verify($password, $row['password'])) {
                    $invalid = 1;
                } else {
                    $sql = "UPDATE `registration` SET `password`='$hashed_password' WHERE `email`='$email'";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        $reset = 1;
                    } else {
                        die(mysqli_error($conn));
                    }
                }
            }
        }
    }

    // --------------------------- Resending a verification code ---------------------------
    if (isset($_POST['resend'])) {
        $sql = "SELECT * FROM `registration` WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                $verificationCode = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
                $updateSql = "UPDATE `registration` SET `verification`='$verificationCode' WHERE `email`='$email'";
                if (mysqli_query($conn, $updateSql)) {
                    require("mailing/script.php");
                    $subject = "Password Reset Request";
                    $message = "<p>Your verification code for password reset is: <strong>$verificationCode</strong></p>
                                <p>Please use this code to reset your password. If you did not request a password reset, please ignore this email or contact support if you have concerns.</p>";
                    $response = sendMail($email, $subject, $message);
                    if ($response === "success") {
                        $resendSuccess = 1;
                    } else {
                        $invalid = 1;
                        $response = "Failed to send verification email.";
                    }
                }
            } else {
                $invalid = 1;
                $response = "Email does not exist.";
            }
        } else {
            $invalid = 1;
            $response = "Database error: " . mysqli_error($conn);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <link rel="stylesheet" href="CSS/login.css">
    <style>
        body {
            background: url("img/bg3.png") no-repeat fixed center center / cover;
        }

        #new-password-popup {
            display: none;
            /* Hide by default */
        }
    </style>
</head>

<body>
    <?php
    // --------------------------- Alerts ---------------------------
    if ($invalid) {
        echo '<script>document.addEventListener("DOMContentLoaded", function() { document.querySelector("#new-password-popup").style.display = "flex"; });</script>';
        echo '<div id="alert">
        <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        The new password cannot be the same as your current password. Please select a different password to ensure the security of your account. 
      </div>';
    }
    if ($reset) {
        echo '<div id="alert" style="background-color:green" >
        <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        Your password has been successfully updated.
      </div>';
        echo "<script>setTimeout(function() { window.location.href='home.php'; }, 1000);</script>";
    }
    if ($blocked) {
        echo '<div id="alert">
        <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        Wrong verification code, please try again!. 
      </div>';
    }
    if ($showNewPasswordPopup) {
        echo '<script>document.addEventListener("DOMContentLoaded", function() { document.querySelector("#new-password-popup").style.display = "block"; });</script>';
    }
    if ($resendSuccess) {
        echo '<div id="alert" style="background-color:green">
        <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        Verification code has been resent to your email.
      </div>';
    }
    ?>
    <!-- ---------------------------  verification form --------------------------- -->
    <div class="form-box">
        <form method="post" action="newpass.php">
            <p>Please Check your email <br>
                We sent a verification code
                <hr>
            </p>
            <p>
                <label for="verify">Verification code</label>
                <input type="password" required class="inputbox" id="verify" name="verification">
                <ion-icon name="key-outline"></ion-icon>
            </p>
            <button class="button-login">Verify</button>
            <p>Didn't receive an Email? <a href="#" class="login-a" id="resend-link">Resend</a></p>
            <div class="line"></div>

            <a href="home.php" class="login-a">Back to home</a> <br> <br>
        </form>
        <!-- Hidden form for resending verification code -->
        <form id="resend-form" method="post" style="display: none;">
            <input type="hidden" name="resend" value="1">
        </form>
    </div>

    <!-- ---------------------------  newpassword popup --------------------------- -->
    <div id="new-password-popup">
        <section>
            <div class="form-box">
                <form action="newpass.php" id="form" method="post">
                    <img src="img/close.jpg" alt="close" class="close" id="close">

                    <h2>Reset Password</h2>
                    <hr>
                    <p>Enter your new password</p>
                    <p>
                        <label for="password">Password</label>
                        <input type="password" required id="pass-validate" class="inputbox" name="password">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </p>
                    <div id="message">Password is <span id="strength"></span></div>
                    <small id="restriction">
                        <ul>
                            <li>Your password must be at least 8 characters long.</li>
                            <li>It should contain a mix of letters (uppercase and lowercase).</li>
                            <li>Include at least one number.</li>
                            <li>Include at least one special character (e.g., ! @ # $ % ^ & *).</li>
                        </ul>
                    </small>
                    <p>
                        <label for="Confirm">Confirm password</label>
                        <input type="password" required id="Confirm" class="inputbox" name="confirm">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </p>
                    <p><button class="button-login">Reset Password</button></p>
                </form>
            </div>
        </section>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script>
        document.getElementById("resend-link").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent the default link behavior
            document.getElementById("resend-form").submit(); // Submit the hidden form
        });
    </script>
    <script src="javaScript/pass.js"></script>
    <script>
        document.getElementById("close").addEventListener("click", function() {
            document.querySelector("#new-password-popup").style.display = "none";
        });
    </script>

</body>

</html>