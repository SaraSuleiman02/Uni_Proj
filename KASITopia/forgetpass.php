<?php
$login = 0;
$invalid = 0;
$verificationCode = '';
$response = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'php/connect.php';

    $email = $_POST['email'];
    session_start();
    $_SESSION['reset_email'] = $email;

    //  ---------------------------  sending a verification code --------------------------- 
    $sql = "SELECT * FROM `registration` WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $verificationCode = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
            $updateSql = "UPDATE `registration` SET `verification`='$verificationCode' WHERE `email`='$email'";
            if (mysqli_query($conn, $updateSql)) {
                $login = 1;

                require("mailing/script.php");
                $subject = "Password Reset Request";
                $message = "<p>Your verification code for password reset is: <strong>$verificationCode</strong></p>
                            <p>Please use this code to reset your password. If you did not request a password reset, please ignore this email or contact support if you have concerns.</p>";
                $response = sendMail($email, $subject, $message);
                if ($response !== "success") {
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
        body {
            background: url("img/bg3.png") no-repeat fixed center center / cover;
        }
    </style>
</head>

<body>
    <?php
    //   ---------------------------  Alerts --------------------------- 

    if ($invalid) {
        echo '<div id="alert">
        <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        ' . $response . '
      </div>';
    }
    if ($login && $response == "success") {
        echo '<div id="alert" style="background-color:green" >
        <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        Verification code has been sent.
      </div>';
        echo "<script>setTimeout(function() { window.location.href='newpass.php?email=$email'; }, 800);</script>";
    }
    ?>
    <section>
        <!-- ---------------------------  Email form --------------------------- -->
        <div class="form-box">
            <form action="forgetpass.php" method="post" enctype="multipart/form-data">
                <h2>Forget Password</h2>
                <hr>
                <p>Enter your email and we'll send you a code <br> to get back into your account.</p>
                <div>
                    <input type="email" required class="inputbox" placeholder="Enter your email" name='email'>
                    <ion-icon name="mail-outline"></ion-icon>
                </div>
                <br>
                <button class="button-login" name="submit">Send Email</button><br><br>
                <div class="line"></div>
                <p> <a type="submit" href="home.php" class="login-a">Back to home</a> </p>
            </form>
        </div>

        <?php
        if ($response == "success") {
            echo '<p class="success">Email sent</p>';
        } else if ($response) {
            echo '<p class="error">' . $response . '</p>';
        }
        ?>
    </section>

    <!-- Link to ionic framework -->
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>