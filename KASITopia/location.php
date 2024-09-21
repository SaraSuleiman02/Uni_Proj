<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>navigator page</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/navbar.css">
    <link rel="stylesheet" type="text/css" href="CSS/mapstyle.css">
</head>

<body>

    <!------------------- NAVBAR ------------------->
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
                            <li><a href="guide.php">Booking a Guide</a></li>
                            <li><a href="schedule.php">Recommending a Course Schedule</a></li>
                            <li><a href="#.php">Locations</a></li>
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
        </div>
    </nav>
    <img class="left-img" src="img/students.jpg.png">
    <div class="slide-container">
        <!-- Gf navigator -->
        <div class="Container">
            <h1>Gf Map</h1>
            <div class="container2">
                <select class="labSelector">
                    <option value="lab1">Lab 001(مختبر 001)</option>
                    <option value="lab2">Lab 002(مختبر 002)</option>
                    <option value="classroom1">classroom 001(قاعة 001)</option>
                </select>
                <button class="dropPin">Drop Pin</button>

            </div>

            <img class="mapImg" src="img/GF_nav.jpg" alt="Lab Mapgf">



        </div>


        <!-- 1st floor navigator-->

        <div class="Container">
            <h1>1st Floor Map</h1>
            <div class="container2">
                <select class="labSelector">
                    <option value="classroom105">classroom 105|قاعة 105</option>
                    <option value="lab107">Lab 107|مختبر 107</option>
                    <option value="classroom101">classroom 101|قاعة 101</option>
                    <option value="lab101">lab 101|مختبر 101</option>
                    <option value="lab105">lab 105|مختبر 105</option>
                    <option value="lab104">lab 104|مختبر 104</option>
                    <option value="classroom103">classroom 103|قاعة 103</option>
                    <option value="lab103">lab 103|مختبر 103</option>
                    <option value="lab102">lab 102|مختبر 102</option>
                    <option value="classroom102">classroom 102|قاعة 102</option>
                </select>
                <button class="dropPin">Drop Pin</button>
            </div>

            <img class="mapImg" src="img/1st_nav.jpg" alt="Lab Map1">

        </div>




        <!--2nd floor navigator-->
        <div class="Container">
            <h1>2nd Floor Map</h1>
            <div class="container2">
                <select class="labSelector">

                    <option value="classroom205">classroom 205|قاعة 205</option>
                    <option value="lab207">Lab 207|مختبر 207</option>
                    <option value="lab206">Lab 206|مختبر 206</option>
                    <option value="classroom201">classroom 201|قاعة 201</option>
                    <option value="lab201">lab 201|مختبر 201</option>
                    <option value="lab205">lab 205|مختبر 205</option>
                    <option value="lab204">lab 204|مختبر 204</option>
                    <option value="classroom203">classroom 203|قاعة 203</option>
                    <option value="lab203">lab 203|مختبر 203</option>
                    <option value="lab202">lab 202|مختبر 202</option>
                    <option value="classroom202">classroom 202|قاعة 202</option>


                </select>
                <button class="dropPin">Drop Pin</button>
            </div>

            <img class="mapImg" src="img/2nd_nav.jpg" alt="Lab Map2">

        </div>
        <!--3rd floor navigator-->
        <div class="Container">
            <h1>3rd Floor Map</h1>
            <div class="container2">
                <select class="labSelector">

                    <option value="classroom301">classroom 301|قاعة 301</option>
                    <option value="lab301">lab 301|مختبر 301</option>
                    <option value="lab304">lab 304|مختبر 304</option>
                    <option value="classroom303">classroom 303|قاعة 303</option>
                    <option value="lab303">lab 303|مختبر 303</option>
                    <option value="lab302">lab 302|مختبر 302</option>
                    <option value="classroom302">classroom 302|قاعة 302</option>

                </select>

                <button class="dropPin">Drop Pin</button>
            </div>


            <img class="mapImg" src="img/3rd_nav.jpg" alt="Lab Map3">

        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>

    <script src="javaScript/navbar.js"></script>
    <script src="javaScript/mapsjs.js"></script>
    <!-- Link to ionic framework -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>