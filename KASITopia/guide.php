<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="CSS/navbar.css">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/guide.css">
    <link rel="stylesheet" href="CSS/login.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- custom alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Booking a Guide</title>

</head>

<body>
    </div>
    <!-------------------- PHP ALERTS ------------------------>
    <?php
    include 'php/login_database.php';

    if ($invalid) {
        echo '<script>document.addEventListener("DOMContentLoaded", function() { document.querySelector(".popup").style.display = "flex"; });</script>';
        echo '<div id="alert" style="margin-top: 70px;" >
        <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        Invalid email or password.
      </div>';
    }
    if ($login) {
        echo '<div id="alert" style="background-color:green; margin-top: 70px;" >
        <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        Welcome back.
      </div>';
    }
    if (isset($_GET['booked'])) {
        if ($_GET['booked'] == 1) {
            echo '<div id="alert" style="background-color:green; margin-top: 70px;" >
            <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
            Guide booked successfully.
          </div>';
            echo "<script>setTimeout(function() { window.location.href='home.php'; }, 2000);</script>";

        } else {
            echo '<div id="alert" style="background-color:red; margin-top: 70px;" >
            <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
            Failed to book guide. Please try again.
          </div>';
        }
    }

    if (isset($_GET['dayError'])) {
        if ($_GET['dayError'] == 1) {
            echo '<div id="alert" style="background-color:red; margin-top: 70px;" >
            <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
            Kindly select a day in the future, indicating any day that follows today.
          </div>';
        }
    }
    if (isset($_GET['fullyBooked'])) {
        if ($_GET['fullyBooked'] == 1) {
            echo '<div id="alert" style="background-color:red; margin-top: 70px;" >
            <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
            All the guides in this time are fully booked please choose another time.
          </div>';
        }
    }

    ?>
    <!-------------------- NAVBAR ------------------------>
    <nav>
        <div class="navbar">
            <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
            <div class="logo"><img src="img/KASIT.ico" alt="" style="width:100%;"></div>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <span class="logo_name">KASITopia</span>
                    <ion-icon name="close-outline" class="close"></ion-icon>
                </div>
                <ul class="links">
                    <li><a href="home.php">Home</a></li>
                    <li>
                        <a href="#">Services </a>
                        <ion-icon name="chevron-down-outline" class="arrow htmlcss-arrow"></ion-icon>
                        <ul class="services-sub-menu sub-menu">
                            <li><a href="#">Booking a Guide</a></li>
                            <li><a href="schedule.php">Recommending a Course Schedule</a></li>
                            <li><a href="location.php">Locations</a></li>
                            <li><a href="office.php">Office Hours</a></li>
                            <li><a href="calc.php">GPA Calculator</a></li>
                            <li><a href="work.php">Career paths</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Websites </a>
                        <ion-icon name="chevron-down-outline" class="arrow js-arrow"></ion-icon>
                        <ul class="websites-sub-menu sub-menu">
                            <li><a href="https://elearning.ju.edu.jo/moodle10/login/index.php">Elearning</a></li>
                            <li><a href="https://web.facebook.com/KASIT.Official">KASIT Facebook Page</a></li>
                            <li><a href="https://regapp.ju.edu.jo/regapp/">Student Registartion System</a></li>
                            <li><a href="https://juexams.com/moodle/">JUexams</a></li>
                            <li><a href="https://eservices.ju.edu.jo/JUCS/">community Services</a></li>
                            <li><a href="https://eservices.ju.edu.jo/ClinicApp/">Student clinic</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="login">
                <?php
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                if (isset($_SESSION['email'])) {
                    echo '<a href="logout_guide.php" id="button" class="nav-a"><ion-icon name="log-out-outline"></ion-icon>&nbsp;Logout</a>';
                } else {
                    echo '<a href="#" id="button" class="nav-a"><ion-icon name="person"></ion-icon>&nbsp;Login</a>';
                }
                ?>
            </div>
        </div>

        <!-------------------- LOGIN pop up ------------------------>

        <div class="popup">
            <div class="popup-content">

                <form action="guide.php" method="post" id='form'>
                    <img src="img/close.jpg" alt="close" class="close" id="close">
                    <h1>Login</h1>
                    <hr>
                    <div class="info">
                        <p>
                            <label for="email">Email &nbsp; &nbsp; &nbsp;</label>
                            <input name="email" id=email type="email" required class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                        </p>

                        <p>
                            <label for="password">Password</label>
                            <input name="password" type="password" id="password" required class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </p>
                    </div>

                    <button class="button-login">Log in</a></button>
                    <br>

                    <div class="line">
                        <p>
                            <a href="forgetpass.php" class="login-a">
                                <b>Forgot Password?</b>
                            </a>
                        </p>
                    </div>

                    <div class="sign-up">
                        <p>Don't have an account? <a href="register.php" class="login-a"><b>Register</b></a></p>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <!-------------------- GUIDE SECTION ---------------->
    <div class="container2">
        <div class="formtxt">
            <p>
                Getting lost in the faculty is something we've all been through!<br>
                But not anymore with <span class="KASITopia">KASITopia.</span>
            </p>
        </div>

        <div class="collapsible">
            <h2>Book Your Guide For A Tour</h2>
        </div>
        <div class="content">
            <form class="guideForm" id="booking" action="php/guide_database.php" method="POST">
                <br>

                <h3>Please fill in the information needed</h3>

                <div class="gender">
                    <h4>Guide Gender:</h4>
                    <input type="radio" id="female" name="Gender" value="F" required>
                    <label for="female">Female</label>
                    <input type="radio" id="male" name="Gender" value="M" required>
                    <label for="male">Male</label>
                </div>

                <br>

                <div class="time">
                    <label for="language">Guide's &nbsp; Language:</label>
                    <select id="bookingDay" name="language" required>
                        <option value="Arabic">Arabic</option>
                        <option value="English/Arabic">English</option>
                    </select>
                    <br>
                    <label for="bookingTime">Time:</label>
                    <select id="bookingTime" name="bookingTime" required>
                        <option value="10:00am">10:00am</option>
                        <option value="12:30pm">12:30pm</option>
                        <option value="3:00pm">3:00pm</option>
                    </select>
                    <br>
                    <label for="bookingDay">Day:</label>
                    <select id="bookingDay" name="bookingDay" required>
                        <option value="1">Sunday</option>
                        <option value="2">Monday</option>
                        <option value="3">Tuesday</option>
                        <option value="4">Wednesday</option>
                        <option value="5">Thursday</option>
                    </select>
                </div>
                <br>
                <!-- <button type="submit" class="bookGuide-btn">Book Now</button> -->
                <button type="submit" class="bookGuide-btn">Book Now</button>
            </form>
            <div class="meetingLoc">
                <p>
                    <bold>
                        The meeting will take place at the IT Faculty, located on the ground floor.
                    </bold>
                </p>
            </div>
        </div>
    </div>


    <!------------------- FOOTER ------------------->
    <footer>
        <div class="copyright">
            &copy; 2024 KASITopia. All rights reserved.
        </div>
    </footer>

    <script src="javaScript/navbar.js"></script>
    <script src="javaScript/index.js"></script>


    <!-- Link to ionic framework -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- login alert -->
    <script>

        window.onload = function () {
            var isLogged = <?php echo isset($_SESSION['userID']) ? 'true' : 'false'; ?>;
            if (!isLogged) {
                Swal.fire({
                    title: 'KASITopia says',
                    text: 'Please login to use this service.',
                    icon: 'info',
                    confirmButtonText: 'OK'
                    });
        }}

            // collapsable 
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function () {
                    var content = this.nextElementSibling;
                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            }
            // Prevent form submission if user is not logged in
        document.querySelector('.guideForm').addEventListener('submit', function(e) {
            var isLogged = <?php echo isset($_SESSION['email']) ? 'true' : 'false'; ?>;
            if (!isLogged) {
                e.preventDefault();
                Swal.fire({
                    title: 'KASITopia says',
                    text: 'Please login to book a guide.',
                    icon: 'info',
                    confirmButtonText: 'OK'
                });
            }
        });
    </script>
</body>

</html>