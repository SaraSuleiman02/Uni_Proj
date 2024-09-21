<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Calculator</title>

    <!-- Bootstrap for buttons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/navbar.css">
    <link rel="stylesheet" type="text/css" href="CSS/calc.css">
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
                            <li><a href="location.php">Locations</a></li>
                            <li><a href="office.php">Office Hours</a></li>
                            <li><a href="#">GPA Calculator</a></li>
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

    <!----------------- CALCULATOR ----------------->
    <h1>GPA Calculator</h1>
    <div class="calc-container">
        <h3 class="header-1">Calculate your GPA or recalculate it if you want to retake a course</h3>
        <div class="container-1">
            <div class="gpa">
                <form class="get-0">
                    <fieldset>
                        <div class="course-field">
                            <!-- the basic gpa fields -->
                            <div class="flex-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <label for="original-gpa">GPA: </label>
                                            <input type="number" step="0.01" min="1" max="4" class="original-gpa get" placeholder="Enter your current GPA" required>
                                        </div>
                                        <div class="col">
                                            <label for="credit-hours">Credit Hours:</label>
                                            <input type="number" min="12" class="credit-hours get" placeholder="Enter the credit hours" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- the course info fields -->
                            <div class="flex-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <label for="course-unit" id="course-hours">Course Hours:</label>
                                            <input type="number" placeholder="1" class="course-unit get" min="1" max="3" required>
                                        </div>
                                        <div class="col">
                                            <label for="course-grade" id="course-g">Course Grade:</label>
                                            <select class="course-grade get" id="grades">
                                                <option value="select" class="grade "> Select</option>
                                                <option value="A" class="grade"> A &nbsp;&nbsp;| 4.00</option>
                                                <option value="A-" class="grade"> A- | 3.75</option>
                                                <option value="B+" class="grade"> B+ | 3.5</option>
                                                <option value="B" class="grade"> B &nbsp;&nbsp;| 3</option>
                                                <option value="B-" class="grade"> B- | 2.75</option>
                                                <option value="C+" class="grade"> C+ | 2.5</option>
                                                <option value="C" class="grade"> C &nbsp;&nbsp;| 2</option>
                                                <option value="C-" class="grade"> C- | 1.75</option>
                                                <option value="D+" class="grade"> D+ | 1.5</option>
                                                <option value="D" class="grade"> D &nbsp;&nbsp;| 1.00</option>
                                                <option value="D-" class="grade"> D- | 0.75</option>
                                                <option value="F" class="grade"> F &nbsp;&nbsp;&nbsp;| 0</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

            <!-- Buttons -->
            <div class="buttons">
                <button type="button" id="add-course">Add courses</button>
                <button type="button" id="remove-course">Remove course</button>
                <button type="button" id="get-grade">Calculate GPA</button>
            </div>
            <!----------- Recalculate Section ---------->
            <div class="collapsible" id="recalculate">
                <h6>Recalculate GPA</h6>
            </div>
            <div class="content">
                <div class="recalculate-gpa">
                    <form class="get-0">
                        <fieldset>
                            <div class="course-field-1">
                                <div class="flex-container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <label for="re-gpa">GPA: </label>
                                                <input type="number" step="0.01" min="1" max="4" class="re-gpa get" placeholder="Enter your current GPA" required>
                                            </div>
                                            <div class="col">
                                                <label for="re-credit-hours">Credit Hours:</label>
                                                <input type="number" min="12" class="re-credit-hours get" placeholder="Enter the credit hours" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- repeated Course info -->
                                <div class="flex-container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <label for="recalculate-course-unit" id="recalculate-course-hours">Course
                                                    Hours:</label>
                                                <input type="number" placeholder="1" class="recalculate-course-unit get" min="1" max="3" required>
                                            </div>

                                            <div class="col">
                                                <label for="recalculate-course-grade" id="recalculate-course-g">Old
                                                    Grade:</label>
                                                <select class="recalculate-course-grade get" id="recalculate-grades">
                                                    <option value="select" class="grade "> Select</option>
                                                    <option value="A" class="grade"> A &nbsp;&nbsp;| 4.00</option>
                                                    <option value="A-" class="grade"> A- | 3.75</option>
                                                    <option value="B+" class="grade"> B+ | 3.5</option>
                                                    <option value="B" class="grade"> B &nbsp;&nbsp;| 3</option>
                                                    <option value="B-" class="grade"> B- | 2.75</option>
                                                    <option value="C+" class="grade"> C+ | 2.5</option>
                                                    <option value="C" class="grade"> C &nbsp;&nbsp;| 2</option>
                                                    <option value="C-" class="grade"> C- | 1.75</option>
                                                    <option value="D+" class="grade"> D+ | 1.5</option>
                                                    <option value="D" class="grade"> D &nbsp;&nbsp;| 1.00</option>
                                                    <option value="D-" class="grade"> D- | 0.75</option>
                                                    <option value="F" class="grade"> F &nbsp;&nbsp;&nbsp;| 0</option>
                                                </select>
                                            </div>

                                            <div class="col">
                                                <label for="recalculate-new-grade" id="recalculate-new-g">New
                                                    Grade:</label>
                                                <select class="recalculate-new-grade get" id="recalculate-new-grades">
                                                    <option value="select" class="grade "> Select</option>
                                                    <option value="A" class="grade"> A &nbsp;&nbsp;| 4.00</option>
                                                    <option value="A-" class="grade"> A- | 3.75</option>
                                                    <option value="B+" class="grade"> B+ | 3.5</option>
                                                    <option value="B" class="grade"> B &nbsp;&nbsp;| 3</option>
                                                    <option value="B-" class="grade"> B- | 2.75</option>
                                                    <option value="C+" class="grade"> C+ | 2.5</option>
                                                    <option value="C" class="grade"> C &nbsp;&nbsp;| 2</option>
                                                    <option value="C-" class="grade"> C- | 1.75</option>
                                                    <option value="D+" class="grade"> D+ | 1.5</option>
                                                    <option value="D" class="grade"> D &nbsp;&nbsp;| 1.00</option>
                                                    <option value="D-" class="grade"> D- | 0.75</option>
                                                    <option value="F" class="grade"> F &nbsp;&nbsp;&nbsp;| 0</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="buttons-1">
                    <button id="add-course-1">Add courses</button>
                    <button id="remove-course-1">Remove course</button>
                    <button id="get-grade-1">Calculate GPA</button>
                </div>
            </div>

            <div class="result-div">
                <p id="result">Your expected GPA is : </p>
            </div>
        </div>
    </div>

    <!------------------- FOOTER ------------------->
    <footer>
        <div class="copyright">
            &copy; 2024 KASITopia. All rights reserved.
        </div>
    </footer>

    <script src="javaScript/calc.js"></script>
    <script src="javaScript/navbar.js"></script>
    <script src="javaScript/index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Link to ionic framework -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>