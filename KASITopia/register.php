<?php
session_start();
$success = 0;
$no_email = 0;
$verified = 0;
$blocked = 0;
$email_error = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'php/connect.php';

    // Handle registration form submission
    if (isset($_POST["register"])) {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $Gender = $_POST['Gender'];
        $major = strtoupper($_POST['major']);
        $yearOfStudy = $_POST['year'];

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if the email is unique
        $sql = "SELECT * FROM `registration` WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                $no_email = 1;
            } else {
                // Generate verification code and send email
                $verificationCode = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
                $hashed_verification = password_hash($verificationCode, PASSWORD_DEFAULT);

                $_SESSION['verification'] = $hashed_verification;

                $_SESSION['registration'] = [
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'phone' => $phone,
                    'email' => $email,
                    'hashed_password' => $hashed_password,
                    'Gender' => $Gender,
                    'major' => $major,
                    'yearOfStudy' => $yearOfStudy,
                    'verification' => $hashed_verification
                ];

                require("mailing/script.php");
                $subject = "Email Confirmation";
                $message = "<html>
                    <head>
                      <title>Email Confirmation</title>
                    </head>
                    <body>
                      <p>Thank you for signing up!</p>
                      <p>Please use the following verification code to confirm your email address:</p>
                      <h2>$verificationCode</h2>
                      <p>If you did not sign up for this service, please ignore this email.</p>
                    </body>
                    </html>";
                $response = sendMail($email, $subject, $message);
                if ($response) {
                    $success = 1;
                } else {
                    $email_error = 1;
                }
            }
        }
    }

    // Handle verification code submission
    if (isset($_POST['verification'])) {
        $verificationCode2 = $_POST['verification'];
        if (password_verify($verificationCode2, $_SESSION['verification'])) {
            $verified = 1;
            $registration = $_SESSION['registration'];
            $sql = "INSERT INTO `registration` (firstname, lastname, phoneNO, email, password, gender, major, yearOfStudy, verification)
                     VALUES ('" . $registration['firstName'] . "', '" . $registration['lastName'] . "', '" . $registration['phone'] . "', '" . $registration['email'] . "', '" . $registration['hashed_password'] . "', '" . $registration['Gender'] . "', '" . $registration['major'] . "', '" . $registration['yearOfStudy'] . "', '" . $registration['verification'] . "')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                unset($_SESSION['verification']);
                unset($_SESSION['registration']);
            }
        } else {
            $blocked = 1;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="CSS/login.css">
    <style>
        body {
            background: url("img/bg3.png") no-repeat fixed center center / cover;
        }
    </style>
</head>

<body>
    <!--------------- alert code --------------->
    <?php
    if ($no_email) {
        echo '<div id="alert">
        <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        This email already exists
      </div>';
    }
    if ($email_error) {
        echo '<div id="alert">
        <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        Invalid email, please try again.
      </div>';
    }
    if ($success) {
        echo '<div id="alert" style="background-color:green">
        <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        Please check your email for the verification code.
      </div>';
        echo '<script>document.addEventListener("DOMContentLoaded", function() { document.querySelector("#verification-popup").style.display = "block"; });</script>';
    }
    if ($verified) {
        echo '<div id="alert" style="background-color:green">
        <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        Your registration has been successfully completed.
      </div>';
        echo "<script>setTimeout(function() { window.location.href='home.php'; }, 1500);</script>";
    }
    if ($blocked) {
        echo '<script>document.addEventListener("DOMContentLoaded", function() { document.querySelector("#verification-popup").style.display = "block"; });</script>';
        echo '<div id="alert">
        <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        Wrong verification code, please try again!. 
      </div>';
    }
    ?>

    <form id="form" action="" method="post">
        <div class="form-box">
            <h1>Sign up</h1>
            <hr>
            <input type="text" id="firstname" placeholder="First name" class="inputbox" required name="firstname">
            <input type="text" id="lastname" placeholder="Last name" class="inputbox" name="lastname" required>
            <br>
            <input type="tel" id="phone-reg" placeholder="Enter your phone number" class="inputbox" style="width: 400px" name="phone" pattern="07[789][0-9]{7}" required>
            <br>
            <input type="email" id="email-reg" placeholder="Enter your email address" class="inputbox" style="width: 400px" name="email" required>
            <br>
            <input type="password" id="pass-validate" placeholder="New password" class="inputbox" style="width: 400px" name="password" required>
            <div id="message">Password is <span id="strength"></span></div>
            <small id="restriction">
                <ul>
                    <li>Your password must be at least 8 characters long.</li>
                    <li>It should contain a mix of letters (uppercase and lowercase).</li>
                    <li>Include at least one number.</li>
                    <li>Include at least one special character (e.g., ! @ # $ % ^ & *).</li>
                </ul>
            </small>
            <br>
            <input type="password" id="Confirm" placeholder="Confirm password" class="inputbox" style="width: 400px" name="confirmpassword" required>
            <br>
            Gender:
            <label for="male">Male </label><input type="radio" id="male" name="Gender" value="M" required>
            <label for="female">Female </label><input type="radio" id="female" name="Gender" value="F" required>
            <br>
            <label for="major">Your major: </label>
            <select name="major" id="major" class="inputbox">
                <option value="cs">CS</option>
                <option value="cis">CIS</option>
                <option value="BIT">BIT</option>
                <option value="AI">AI</option>
                <option value="ds">DS</option>
                <option value="cyber">Cyber</option>
            </select>
            <br>
            <label>Current year of study at university</label>
            <select name="year" id="year" class="inputbox">
                <option value="first">First Year</option>
                <option value="second">Second Year</option>
                <option value="third">Third Year</option>
                <option value="fourth">Fourth Year</option>
                <option value="postgraduate">Graduate/Postgraduate</option>
            </select>
            <button type="submit" class="button-login" name="register">Submit</button>
            <div class="line"></div>
            <a href="home.php" class="login-a">Back to home</a> <br> <br>
        </div>
    </form>

    <!------------------ verification form ------------------>
    <div id="verification-popup" style="display:none;">
        <div class="form-box">
            <form method="post" action="">
                <img src="img/close.jpg" alt="close" class="close" id="close">
                <p>Please check your email <br>
                    We sent a verification code
                    <hr>

                </p>
                <p>
                    <label for="verify">Verification code</label>
                    <input type="password" required class="inputbox" id="verify" name="verification">
                </p>
                <button type="submit" class="button-login">Verify</button>

            </form>

        </div>
    </div>
    </div>

    <script src="javaScript/pass.js"></script>

    <script>
        document.getElementById("close").addEventListener("click", function() {
            document.querySelector("#verification-popup").style.display = "none";
        });
    </script>
</body>

</html>
