<!-- ------------------- html code for home -------------------- -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css" >
    <link rel="stylesheet" type="text/css" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/login.css">


    <!-- Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>KASITopia</title>
</head>

<body>
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
                    <li><a href="#">Home</a></li>
                    <li>
                        <a href="#">Services </a>
                        <ion-icon name="chevron-down-outline" class="arrow htmlcss-arrow"></ion-icon>
                        <ul class="services-sub-menu sub-menu">
                            <li><a href="guide.php">Booking a Guide</a></li>
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
                    echo '<a href="logout_home.php" id="button" class="nav-a"><ion-icon name="log-out-outline"></ion-icon>&nbsp;Logout</a>';
                } else {
                    echo '<a href="#" id="button" class="nav-a"><ion-icon name="person"></ion-icon>&nbsp;Login</a>';
                }
                ?>
            </div>
        </div>

        <!-------------------- LOGIN pop up ------------------------>

        <div class="popup">
            <div class="popup-content">

                <form action="home.php" method="post" id='form'>
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


    <!------------------ HOME SECTION ------------------->
    <section class="home" id="home">
        <div class="home-text">
            <h1>KASITopia</h1> <br>
            <p>
                Welcome to KASITopia, your all-in-one guide for labs, schedules, faculty support, and campus events
            </p>
            <a href="#about-us" class="home-btn">Read More About Us!</a>
        </div>
    </section>

    <!---------------- ABOUT-US SECTION  ----------------->

    <br><br><br><br>
    <div class="about-us" id="about-us">
        <div class="heading">
            <h1>About&nbsp;Us&nbsp;&nbsp;&nbsp;</h1>
        </div>
        <section class="about-us">
            <div class="content">
                <p>
                    KASITopia represents an ideal academic environment, where students can find valuable guidance,
                    support, and resources
                    for their college journey. We came up with this website because of the problems we face as
                    students,
                    such as finding the labs and classrooms,
                    not knowing what courses to take in the next semester, and many other things. KASITopia helps
                    you in
                    your journey at the university.
                </p>
                <h2>Check our services now!</h2>
                <section id="services-container">
                    <button type="button"><a href="#events" class="">Events & Announcements</a></button>
                    <button type="button"><a href="guide.php">Book a Guide</a></button>
                    <button type="button"><a href="schedule.php">Request a Recommended Course Schedule</a></button>
                    <button type="button"><a href="location.php">Classrooms & Labs Location</a></button>
                    <button type="button"><a href="office.php"> Professors Office Hours & Information</a></button>
                    <button type="button"><a href="calc.php">Calculate/Recalculate your GPA</a></button>
                    <button type="button"><a href="work.php">See Career Paths</a></button>
                </section>
            </div>
    </div>


 
   <!------------------- CONTAINER ------------------->
   <br><br><br><br><br><br><br><br><br><br>
    <section id="events">
        <div class="text">
            <h2>Events & Announcements</h2>
            <br>
        </div>
        
    <div id="events-container">
        <div class="event-border">
            <div class="container-box">
                <div class="corner-box"> <bold>28</bold>  <br>&nbsp;Dec 2024</div>
                <div class="container-img">
                    <img src="img/event1.jpg" alt="access-granted">
                </div>
                
                <p>
                    <p><b>   &#128344; 10:30-12:00 am
                        &#128205; Alouzi Theatre
                    </p></b>
                    <p>
                        Join us for an exciting event, iTravel, where we bring together industry specialists and inspiring speakers from Cozmo Companies and Erasmus. learn about the unique programs offered by these leading organizations.
                        Don't miss out on this opportunity to expand your horizons and be part of an engaging community.
                    </p>
                 
                </p>
            </div>
        </div>

        <div class="event-border">
            <div class="container-box">
                <div class="corner-box"> <bold>5</bold><br> Mar 2024</div>
                <div class="container-img">
                    <img src="img/event2.jpg" alt="access-granted">
                </div>
                
                <p>
                    <p><b>   &#128344; 1:30 pm
                        &#128205; Alouzi Theatre
                    </p></b>
                    <p>
                        The King Abdullah II School of Information Technology, in collaboration with the IEEE CIS TEAM, is thrilled to announce a unique event featuring distinguished speakers from NASA and ASTRO JO. 
                        This event will delve into the fascinating relationship between technology and space exploration.
                    </p>
                 
                </p>
            </div>
        </div>

        <div class="event-border">
            <div class="container-box">
                <div class="corner-box"> <bold>28</bold ><br>Dec 2024</div>
                <div class="container-img">
                    <img src="img/event3.jpg" alt="access-granted">
                </div>
                
                <p>
                    <p><b>   &#128344; 12:00-3:00 pm
                        &#128205; Alouzi Theatre
                    </p></b>
                    <p>SEDCO, in collaboration with the Career Counseling and Alumni Office - King Abdullah II Fund for Development, 
                        is excited to announce an upcoming career day . 
                    </p>
                 
                </p>
            </div>
        </div>

        <div class="event-border">
            <div class="container-box">
                <div class="corner-box"> <bold>28</bold ><br>Dec 2024</div>
                <div class="container-img">
                    <img src="img/event4.jpg" alt="access-granted">
                </div>
                
                <p>
                    <p><b>   &#128344; 2:30 pm
                        &#128205; IT Collage -203 Hall 
                    </p></b>
                    <p>We are excited to announce an engaging Teach Talk featuring Yazeed Hamad, who will delve into the fascinating intersection of Python programming 
                        with Artificial Intelligence (AI), Data Science, and Machine Learning (ML).
                    </p>
                 
                </p>
            </div>
        </div>
    </div>
    </section>

    <br><br><br><br><br><br><br><br><br>
    
    <!------------------- SLIDESHOW ------------------->
    <!-- Slideshow container -->
    <div class="slideshow-container">
        <h2>Our Faculty</h2><br>
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="img/bg1.jpg">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="img/bg4.jpg">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="img/bg6.jpg">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="img/bg10.jpg">
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <br><br><br><br><br><br><br><br><br>

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
</body>

</html>