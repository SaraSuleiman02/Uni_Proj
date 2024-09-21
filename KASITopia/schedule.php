<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>

    <!-- custom alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href='CSS/style.css'>
    <link rel="stylesheet" type="text/css" href="CSS/navbar.css">
    <link rel="stylesheet" type="text/css" href='CSS/schedule.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">

    <link rel="stylesheet" type="text/css" href="CSS/login.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

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

    if (isset($_GET['submitted'])) {
        if ($_GET['submitted'] == 1) {
            echo '<div id="alert" style="background-color:green; margin-top: 70px;" >
            <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
            Your request has been sent, please keep checking you email for the recommended Schedule.
          </div>';
            echo "<script>setTimeout(function() { window.location.href='home.php'; }, 2500);</script>";
        } else {
            echo '<div id="alert" style="background-color:red; margin-top: 70px;" >
            <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
            Failed to Submit. Please try again.
          </div>';
        }
    }

    if (isset($_GET['fullyBooked'])) {
        if ($_GET['fullyBooked'] == 1) {
            echo '<div id="alert" style="background-color:red; margin-top: 70px;" >
            <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
            All guides are busy, Please try again.
          </div>';
        }
    }

    if (isset($_GET['fields'])) {
        if ($_GET['fields'] == 1) {
            echo '<div id="alert" style="background-color:red; margin-top: 70px;" >
            <span id="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
            All fields are required.
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

                <form action="schedule.php" method="post" id='form'>
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

    <!-------------------- Schedule Section ------------------------>

    <div class="form-container">
        <form action="php/schedule_database.php" method="post" id="schedule_form">
            <div id="header">
                <h2 style="color:white;">
                    Struggling to choose your next semester's courses?<br>NO WORRIES, we are here to help!</h2>
            </div>
            <h3>select the courses you have completed</h3>


            <!---- courses for majors: ---->

            <!-----CIS----->
            <div class="course-container" id="CIS">
                <div><label>Faculty Obligatory Courses:</label><br>
                    <select class="course" id="CIS_ob" multiple name="obligatory[]">
                        <option value="None">None</option>
                        <option value="Discrete Mathematics">Discrete Mathematics</option>
                        <option value="Computer Skills for Scientific Faculties">Computer Skills for Scientific
                            Faculties</option>
                        <option value="Fundamentals of Information Technology">Fundamentals of Information Technology
                        </option>
                        <option value="Web Applications Development">Web Applications Development</option>
                        <option value="Object Oriented Programming">Object Oriented Programming</option>
                        <option value="Data Structures">Data Structures</option>
                        <option value="Database Management Systems">Database Management Systems</option>
                        <option value="Linear Algebra for Computational Sciences">Linear Algebra for
                            Computational
                            Sciences
                        </option>
                    </select>
                </div>

                <div><label>Obligatory Specialty Courses:</label><br>
                    <select class="course" id="CIS_ob_sp" name="obligatory_specialty[]" multiple>
                        <option value="None">None</option>
                        <option value="Calculus-1">Calculus-1</option>
                        <option value="Principles of Statistics">Principles of Statistics</option>
                        <option value="Computing Ethics and Documentation">Computing Ethics and Documentation
                        </option>
                        <option value="Information Systems and Applications">Information Systems and
                            Applications
                        </option>
                        <option value="Advanced Java Programming">Advanced Java Programming</option>
                        <option value="Theory of Algorithms">Theory of Algorithms</option>
                        <option value="Computer Graphics">Computer Graphics</option>
                        <option value="Information Security and Privacy">Information Security and Privacy
                        </option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Human Computer Interaction">Human Computer Interaction</option>
                        <option value="Computer Assisted Learning">Computer Assisted Learning</option>
                        <option value="Software Engineering">Software Engineering</option>
                        <option value="Advanced Databases">Advanced Databases</option>
                        <option value="Mobile Development Frameworks">Mobile Development Frameworks</option>
                        <option value="Computer Networks">Computer Networks</option>
                        <option value="Geographical Information Systems">Geographical Information Systems
                        </option>
                        <option value="Digital Image Processing">Digital Image Processing</option>
                        <option value="Advanced Software Engineering">Advanced Software Engineering</option>
                        <option value="Operating Systems">Operating Systems</option>
                        <option value="Project Management">Project Management</option>
                        <option value="Systems Analysis and Design">Systems Analysis and Design</option>
                        <option value="Project-1">Project-1</option>
                        <option value="Project-2">Project-2</option>
                        <option value="Training">Training</option>
                    </select>
                </div>

                <div> <label>Elective Specialty Courses:</label><br>
                    <select class="course" id="CIS_el_sp" name="elective_specialty[]" multiple>
                        <option value="None">None</option>
                        <option value="Data Mining">Data Mining</option>
                        <option value="Advanced AI Programming">Advanced AI Programming</option>
                        <option value="Natural Language Processing">Natural Language Processing</option>
                        <option value="Machine Learning and Neural Networks">Machine Learning and Neural
                            Networks
                        </option>
                        <option value="Health Informatics">Health Informatics</option>
                        <option value="Certified Software">Certified Software</option>
                        <option value="Web Server Programming">Web Server Programming</option>
                        <option value="Information Technology Entrepreneurship and Innovation">Information
                            Technology
                            Entrepreneurship and Innovation</option>
                        <option value="Database Technologies and Applications">Database Technologies and
                            Applications
                        </option>
                        <option value="User Interface/Experience Design">User Interface/Experience Design
                        </option>
                        <option value="Business Process Re-engineering">Business Process Re-engineering</option>
                        <option value="Information and Knowledge Management">Information and Knowledge
                            Management
                        </option>
                        <option value="Security of Web Applications">Security of Web Applications</option>
                        <option value="Intelligent Information Systems">Intelligent Information Systems</option>
                        <option value="Development and Operations (DevOps)">Development and Operations (DevOps)
                        </option>
                        <option value="Advanced Multimedia">Advanced Multimedia</option>
                        <option value="Information Systems Audit and Quality Assurance">Information Systems
                            Audit
                            and
                            Quality Assurance</option>
                        <option value="Special Topics">Special Topics</option>
                        <option value="Cloud Computing">Cloud Computing</option>
                        <option value="Game Engines Design">Game Engines Design</option>
                        <option value="Virtual Reality">Virtual Reality</option>
                        <option value="Internet of things IoT">Internet of things IoT</option>
                        <option value="e-Payment Systems">e-Payment Systems</option>
                        <option value="Digital Speech Processing">Digital Speech Processing</option>
                    </select>
                </div>
            </div>

            <!-----CS----->

            <div class="course-container" id="CS">

                <div><label>Faculty Obligatory Courses:</label><br>
                    <select class="course" id="CS_ob" name="obligatory[]" multiple>
                        <option value="None">None</option>
                        <option value="Discrete Mathematics">Discrete Mathematics</option>
                        <option value="Computer Skills for Scientific Faculties">Computer Skills for Scientific
                            Faculties</option>
                        <option value="Fundamentals of Information Technology">Fundamentals of Information Technology
                        </option>
                        <option value="Web Applications Development">Web Applications Development</option>
                        <option value="Object Oriented Programming">Object Oriented Programming</option>
                        <option value="Data Structures">Data Structures</option>
                        <option value="Database Management Systems">Database Management Systems</option>
                        <option value="Linear Algebra for Computational Sciences">Linear Algebra for Computational
                            Sciences</option>
                    </select>
                </div>

                <div><label for="courses5">Obligatory Specialty Courses:</label><br>
                    <select class="course" id="CS_sp_ob" name="obligatory_specialty[]" multiple>
                        <option value="None">None</option>
                        <option value="Calculus-1">Calculus-1</option>
                        <option value="Calculus-2">Calculus-2</option>
                        <option value="Principles of Statistics">Principles of Statistics</option>
                        <option value="Physics for Computer Science">Physics for Computer Science</option>
                        <option value="Physics for Computer Science –Lab">Physics for Computer Science –Lab</option>
                        <option value="Advanced Programming in Special Languages">Advanced Programming in Special
                            Languages</option>
                        <option value="Logic Design">Logic Design</option>
                        <option value="Theory of Computation">Theory of Computation</option>
                        <option value="Data Structures Lab">Data Structures Lab</option>
                        <option value="Computer Ethics">Computer Ethics</option>
                        <option value="Computer Organization">Computer Organization</option>
                        <option value="Theory of Algorithms">Theory of Algorithms</option>
                        <option value="Numerical Analysis">Numerical Analysis</option>
                        <option value="Modeling and Simulation">Modeling and Simulation</option>
                        <option value="Computer Graphics">Computer Graphics</option>
                        <option value="Computer Networks">Computer Networks</option>
                        <option value="Operating Systems">Operating Systems</option>
                        <option value="Systems Programming and Compilers Construction">Systems Programming and Compilers
                            Construction</option>
                        <option value="Design And Implementation of Programming Languages">Design And Implementation of
                            ProgrammingLanguages</option>
                        <option value="Computational Problems and Techniques">Computational Problems and Techniques
                        </option>
                        <option value="Parallel and Distributed Systems">Parallel and Distributed Systems</option>
                        <option value="Software Engineering">Software Engineering</option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="Information Security and Privacy">Information Security and Privacy</option>
                        <option value="Project-1">Project-1</option>
                        <option value="Project-2">Project-2</option>
                        <option value="Training">Training</option>
                    </select>
                </div>

                <div> <label for="courses6">Elective Specialty Courses:</label><br>
                    <select class="course" id="CS_el_sp" name="elective_specialty[]" multiple>
                        <option value="None">None</option>
                        <option value="Advanced Networking">Advanced Networking</option>
                        <option value="Network Programming">Network Programming</option>
                        <option value="Design Patterns and Clean Code">Design Patterns and Clean Code</option>
                        <option value="Computer Systems Performance">Computer Systems Performance</option>
                        <option value="Graph Theory">Graph Theory</option>
                        <option value="Mobile Wireless Networks">Mobile Wireless Networks</option>
                        <option value="Special Topics">Special Topics</option>
                        <option value="Fundamentals of IoT">Fundamentals of IoT</option>
                        <option value="Cloud Computing Concepts">Cloud Computing Concepts</option>
                        <option value="Mobile Development Frameworks">Mobile Development Frameworks</option>
                        <option value="Database Technologies and applications">Database Technologies and applications
                        </option>
                        <option value="Digital Image Processing">Digital Image Processing</option>
                        <option value="Advanced Web Development">Advanced Web Development</option>
                        <option value="Security of Web Applications">Security of Web Applications</option>
                        <option value="Network Security">Network Security</option>
                        <option value="Applied Statistics">Applied Statistics</option>
                        <option value="Bioinformatics">Bioinformatics</option>
                        <option value="Machine Learning and Neural Network">Machine Learning and Neural Network</option>
                    </select>
                </div>
            </div>
            <!-----CyberSecurity----->

            <div class="course-container" id="cyber">
                <div><label>Faculty Obligatory Courses:</label><br>
                    <select class="course" multiple name="cyber_ob" id="obligatory[]">
                        <option value="None">None</option>
                        <option value="Discrete Mathematics">Discrete Mathematics</option>
                        <option value="Computer Skills for Scientific Faculties">Computer Skills for Scientific
                            Faculties </option>
                        <option value="Fundamentals of Information Technology">Fundamentals of Information Technology
                        </option>
                        <option value="Web Applications Development">Web Applications Development</option>
                        <option value="Object Oriented Programming">Object Oriented Programming</option>
                        <option value="Data Structures">Data Structures</option>
                        <option value="Database Management Systems">Database Management Systems</option>
                        <option value="Linear Algebra for Computational Sciences">Linear Algebra for Computational
                            Sciences</option>
                    </select>
                </div>

                <div><label>Obligatory Specialty Courses:</label><br>
                    <select class="course" multiple id="cyber_ob_sp" name="obligatory_specialty[]">
                        <option value="None">None</option>
                        <option value="Calculus-1">Calculus-1</option>
                        <option value="Principles of Statistics">Principles of Statistics</option>
                        <option value="Principles of Security">Principles of Security</option>
                        <option value="Programming for Cybersecurity">Programming for Cybersecurity</option>
                        <option value=" Security Risk Management and Ethics">Security Risk Management and Ethics
                        </option>
                        <option value="Computer Architecture and Assembly Language">Computer Architecture and Assembly
                            Language</option>
                        <option value="Cryptography">Cryptography</option>
                        <option value="Theory Of Algorithms">Theory Of Algorithms</option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="Computer Networks">Computer Networks</option>
                        <option value="Software Engineering">Software Engineering</option>
                        <option value="Security of Web Applications">Security of Web Applications</option>
                        <option value="Network Security">Network Security</option>
                        <option value="Secure Software Engineering">Secure Software Engineering</option>
                        <option value="Penetration Testing and Ethical Hacking">Penetration Testing and Ethical Hacking
                        </option>
                        <option value="Cyber Physical Systems Security (CPSS)">Cyber Physical Systems Security (CPSS)
                        </option>
                        <option value="Operating Systems">Operating Systems</option>
                        <option value="Authentication and Security Models">Authentication and Security Models</option>
                        <option value="Reverse Engineering and Malware Analysis">Reverse Engineering and Malware
                            Analysis</option>
                        <option value="Digital Forensics for Cybersecurity">Digital Forensics for Cybersecurity</option>
                        <option value="Security Intelligence"> Security Intelligence</option>
                        <option value="Project-1">Project-1</option>
                        <option value="Project-2">Project-2</option>
                        <option value="Training">Training</option>
                    </select>
                </div>

                <div> <label>Elective Specialty Courses:</label><br>
                    <select class="course" multiple name="elective_specialty[]" id="cyber_el_sp">
                        <option value="None">None</option>
                        <option value="Data Mining">Data Mining</option>
                        <option value="Network Programming">Network Programming</option>
                        <option value="Database Technologies and Applications">Database Technologies and Applications
                        </option>
                        <option value="Security Management and Auditing">Security Management and Auditing</option>
                        <option value="Security Policies and Law">Security Policies and Law</option>
                        <option value="Wireless and Mobile Security">Wireless and Mobile Security</option>
                        <option value="Security Certificates">Security Certificates</option>
                        <option value="Steganography and Digital Watermarking">Steganography and Digital Watermarking
                        </option>
                        <option value="Security Operations">Security Operations</option>
                        <option value="Computer Systems Performance">Computer Systems Performance</option>
                        <option value="Fundamentals of IoT">Fundamentals of IoT</option>
                        <option value="Cloud Computing Concepts">Cloud Computing Concepts</option>
                        <option value="e-Payment Systems"> e-Payment Systems</option>
                        <option value="Blockchain Technology">Blockchain Technology</option>
                        <option value="System Administration and Network Services">System Administration and Network
                            Services</option>
                        <option value="Emerging Topics in Cybersecurity">Emerging Topics in Cybersecurity</option>
                    </select>
                </div>
            </div>
            <!-----BIT----->

            <div class="course-container" id="BIT">

                <div><label>Faculty Obligatory Courses:</label><br>
                    <select class="course" multiple id="BIT_ob" name="obligatory[]">
                        <option value="None">None</option>
                        <option value="Discrete Mathematics">Discrete Mathematics</option>
                        <option value="Computer Skills for Scientific Faculties">Computer Skills for Scientific
                            Faculties</option>
                        <option value="Fundamentals of Information Technology">Fundamentals of Information Technology
                        </option>
                        <option value="Web Applications Development">Web Applications Development</option>
                        <option value="Object Oriented Programming">Object Oriented Programming</option>
                        <option value="Data Structures">Data Structures</option>
                        <option value="Database Management Systems">Database Management Systems</option>
                        <option value="Linear Algebra for Computational Sciences">Linear Algebra for Computational
                            Sciences</option>
                    </select>
                </div>

                <div><label>Obligatory Specialty Courses:</label><br>
                    <select class="course" multiple id="BIT_ob_sp" name="obligatory_specialty[]">
                        <option value="None">None</option>
                        <option value="Calculus-1">Calculus-1</option>
                        <option value="Principles of Statistics">Principles of Statistics</option>
                        <option value="Principles of Security">Principles of Security</option>
                        <option value="Programming for Cybersecurity">Programming for Cybersecurity</option>
                        <option value=" Security Risk Management and Ethics">Security Risk Management and Ethics
                        </option>
                        <option value="Computer Architecture and Assembly Language">Computer Architecture and Assembly
                            Language</option>
                        <option value="Cryptography">Cryptography</option>
                        <option value="Theory Of Algorithms">Theory Of Algorithms</option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="Computer Networks">Computer Networks</option>
                        <option value="Software Engineering">Software Engineering</option>
                        <option value="Security of Web Applications">Security of Web Applications</option>
                        <option value="Network Security">Network Security</option>
                        <option value="Secure Software Engineering">Secure Software Engineering</option>
                        <option value="Penetration Testing and Ethical Hacking">Penetration Testing and Ethical Hacking
                        </option>
                        <option value="Cyber Physical Systems Security (CPSS)">Cyber Physical Systems Security (CPSS)
                        </option>
                        <option value="Operating Systems">Operating Systems</option>
                        <option value="Authentication and Security Models">Authentication and Security Models</option>
                        <option value="Reverse Engineering and Malware Analysis">Reverse Engineering and Malware
                            Analysis</option>
                        <option value="Digital Forensics for Cybersecurity">Digital Forensics for Cybersecurity</option>
                        <option value="Security Intelligence"> Security Intelligence</option>
                        <option value="Project-1">Project-1</option>
                        <option value="Project-2">Project-2</option>
                        <option value="Training">Training</option>
                    </select>
                </div>

                <div> <label>Elective Specialty Courses:</label><br>
                    <select class="course" multiple id="elective_specialty" name="elective_specialty[]">
                        <option value="None">None</option>
                        <option value="Data Mining">Data Mining</option>
                        <option value="Network Programming">Network Programming</option>
                        <option value="Database Technologies and Applications">Database Technologies and Applications
                        </option>
                        <option value="Security Management and Auditing">Security Management and Auditing</option>
                        <option value="Security Policies and Law">Security Policies and Law</option>
                        <option value="Wireless and Mobile Security">Wireless and Mobile Security</option>
                        <option value="Security Certificates">Security Certificates</option>
                        <option value="Steganography and Digital Watermarking">Steganography and Digital Watermarking
                        </option>
                        <option value="Security Operations">Security Operations</option>
                        <option value="Computer Systems Performance">Computer Systems Performance</option>
                        <option value="Fundamentals of IoT">Fundamentals of IoT</option>
                        <option value="Cloud Computing Concepts">Cloud Computing Concepts</option>
                        <option value="e-Payment Systems"> e-Payment Systems</option>
                        <option value="Blockchain Technology">Blockchain Technology</option>
                        <option value="System Administration and Network Services">System Administration and Network
                            Services</option>
                        <option value="Emerging Topics in Cybersecurity">Emerging Topics in Cybersecurity</option>
                    </select>
                </div>
            </div>
            <!-----DS----->

            <div class="course-container" id="DS">

                <div><label>Faculty Obligatory Courses:</label><br>
                    <select class="course" multiple id="DS_ob" name="obligatory[]">
                        <option value="None">None</option>
                        <option value="Discrete Mathematics">Discrete Mathematics</option>
                        <option value="Computer Skills for Scientific Faculties">Computer Skills for Scientific
                            Faculties</option>
                        <option value="Fundamentals of Information Technology">Fundamentals of Information Technology
                        </option>
                        <option value="Web Applications Development">Web Applications Development</option>
                        <option value="Object Oriented Programming">Object Oriented Programming</option>
                        <option value="Data Structures">Data Structures</option>
                        <option value="Database Management Systems">Database Management Systems</option>
                        <option value="Linear Algebra for Computational Sciences">Linear Algebra for Computational
                            Sciences</option>

                    </select>
                </div>

                <div><label>Obligatory Specialty Courses:</label><br>
                    <select class="course" multiple id="DS_ob_sp" name="obligatory_specialty[]">
                        <option value="None">None</option>
                        <option value="Principles of Statistics">Principles of Statistics</option>
                        <option value="Calculus 1">Calculus 1</option>
                        <option value="AI Programming">AI Programming</option>
                        <option value="Principles of Data Science">Principles of Data Science</option>
                        <option value="Data Mining">Data Mining</option>
                        <option value="Data Engineering and Analytics">Data Engineering and Analytics</option>
                        <option value="Applied Statistics">Applied Statistics</option>
                        <option value="Ethics of AI and Data Science">Ethics of AI and Data Science</option>
                        <option value="Information Security and Privacy">Information Security and Privacy</option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="NoSQL Databases">NoSQL Databases</option>
                        <option value="Theory of Algorithms">Theory of Algorithms</option>
                        <option value="Machine Learning and Neural networks"></option>Machine Learning and Neural
                        networks"></option>
                        <option value="Pattern Recognition and Information Analysis">Pattern Recognition and Information
                            Analysis</option>
                        <option value="Computer Networks">Computer Networks</option>
                        <option value="Software Engineering">Software Engineering</option>
                        <option value="Natural Language Processing">Natural Language Processing</option>
                        <option value="Data Visualization">Data Visualization</option>
                        <option value="Cloud Computing">Cloud Computing</option>
                        <option value="Big Data">Big Data</option>
                        <option value="Deep Learning">Deep Learning</option>
                        <option value="Model Deployment Frameworks">Model Deployment Frameworks</option>
                        <option value="Training">Training</option>
                        <option value="Project -1"></option>Project -1</option>
                        <option value="Project -2">Project -2</option>
                    </select>
                </div>

                <div> <label>Elective Specialty Courses:</label><br>
                    <select class="course" multiple id="DS_el_sp" name="elective_specialty[]">
                        <option value="None">None</option>
                        <option value="Bioinformatics">Bioinformatics</option>
                        <option value="Financial and Business Data Analytics">Financial and Business Data Analytics
                        </option>
                        <option value="Data Management and Governance">Data Management and Governance</option>
                        <option value="Advance AI programming">Advance AI programming</option>
                        <option value="Social Network Analysis">Social Network Analysis</option>
                        <option value="Healthcare and Medical Data Analytics">Healthcare and Medical Data Analytics
                        </option>
                        <option value="Mining Software Repositories">Mining Software Repositories</option>
                        <option value="Information Technology Entrepreneurship and Innovation">Information Technology
                            Entrepreneurshipand Innovation</option>
                        <option value="Time Series Analysis">Time Series Analysis</option>
                        <option value="IT Project Management">IT Project Management</option>
                        <option value="Computer Vison">Computer Vison</option>
                        <option value="Digital Speech Processing">Digital Speech Processing</option>
                        <option value="Arabic Language Engineering">Arabic Language Engineering</option>
                        <option value="Computational Problems and Techniques">Computational Problems and Techniques
                        </option>
                        <option value="Web Server Programming">Web Server Programming</option>
                        <option value="Embedded Systems">Embedded Systems</option>
                        <option value="Intelligent Robotics">Intelligent Robotics</option>
                        <option value="Virtual Reality">Virtual Reality</option>
                        <option value="Special Topics in Data Science">Special Topics in Data Science</option>
                    </select>
                </div>
            </div>


            <!-- AI -->

            <div class="course-container" id="AI">

                <div><label>Faculty Obligatory Courses:</label><br>
                    <select class="course" multiple id="AI_ob" name="obligatory[]">
                        <option value="None">None</option>
                        <option value="Discrete Mathematics">Discrete Mathematics</option>
                        <option value="Computer Skills for Scientific Faculties">Computer Skills for Scientific
                            Faculties</option>
                        <option value="Fundamentals of Information Technology">Fundamentals of Information Technology
                        </option>
                        <option value="Web Applications Development">Web Applications Development</option>
                        <option value="Object Oriented Programming">Object Oriented Programming</option>
                        <option value="Data Structures">Data Structures</option>
                        <option value="Database Management Systems">Database Management Systems</option>
                        <option value="Linear Algebra for Computational Sciences">Linear Algebra for Computational
                            Sciences</option>
                    </select>
                </div>

                <div><label>Obligatory Specialty Courses:</label><br>
                    <select class="course" multiple id="AI_ob_sp" name="obligatory_specialty[]">
                        <option value="None">None</option>
                        <option value="Principles of Statistics">Principles of Statistics</option>
                        <option value="Calculus-1">Calculus-1</option>
                        <option value="AI Programming">AI Programming</option>
                        <option value="Introduction to Artificial Intelligence">Introduction to Artificial Intelligence
                        </option>
                        <option value="Ethics of Artificial Intelligence and Data Science">Ethics of Artificial
                            Intelligence and DataScience</option>
                        <option value="Knowledge Representation and Reasoning">Knowledge Representation and Reasoning
                        </option>
                        <option value="Data Mining">Data Mining</option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="Ontologies and Knowledge Graphs">Ontologies and Knowledge Graphs</option>
                        <option value="Computer Vision">Computer Vision</option>
                        <option value="Embedded Systems">Embedded Systems</option>
                        <option value="Natural Language Processing">Natural Language Processing</option>
                        <option value="Theory of Algorithms">Theory of Algorithms</option>
                        <option value="Computer Networks">Computer Networks</option>
                        <option value="Information Security and Privacy">Information Security and Privacy</option>
                        <option value="Human Computer Interaction">Human Computer Interaction</option>
                        <option value="Software Engineering">Software Engineering</option>
                        <option value="Machine Learning and Neural Networks">Machine Learning and Neural Networks
                        </option>
                        <option value="Cognitive Science">Cognitive Science</option>
                        <option value="Internet of Things">Internet of Things</option>
                        <option value="Intelligent Robotics">Intelligent Robotics</option>
                        <option value="Deep Learning">Deep Learning</option>
                        <option value="Training">Training</option>
                        <option value="Project-1">Project-1</option>
                        <option value="Project-2">Project-2</option>
                        <option value="Project -2">Project -2</option>
                    </select>
                </div>

                <div> <label>Elective Specialty Courses:</label><br>
                    <select class="course" multiple id="AI_el_sp" name="elective_specialty[]">
                        <option value="None">None</option>
                        <option value="Advanced AI Programming">Advanced AI Programming</option>
                        <option value="Bioinformatics">Bioinformatics</option>
                        <option value="Applied Statistics">Applied Statistics</option>
                        <option value="User Adaptive Systems">User Adaptive Systems</option>
                        <option value="NoSQL Databases">NoSQL Databases</option>
                        <option value="Social Network Analysis">Social Network Analysis</option>
                        <option value="Knowledge Graphs Technologies and Applications">Knowledge Graphs Technologies and
                            Applications</option>
                        <option value="Healthcare and Medical Data Analytics">Healthcare and Medical Data Analytics
                        </option>
                        <option value="Pattern Recognition and Information Analysis">Pattern Recognition and Information
                            Analysis</option>
                        <option value="Advanced Natural Language Processing">Advanced Natural Language Processing
                        </option>
                        <option value="Digital Speech Processing">Digital Speech Processing</option>
                        <option value="Information Technology Entrepreneurship and Innovation">Information Technology
                            Entrepreneurshipand Innovation</option>
                        <option value="Big Data">Big Data</option>
                        <option value="Reinforcement learning">Reinforcement learning</option>
                        <option value="Intelligent Agents">Intelligent Agents</option>
                        <option value="Advanced Embedded Systems">Advanced Embedded Systems</option>
                        <option value="Data Visualization">Data Visualization</option>
                        <option value="Brain-Computer Interaction">Brain-Computer Interaction</option>
                        <option value="Computational Problems and Techniques">Computational Problems and Techniques
                        </option>
                        <option value="Game AI">Game AI</option>
                        <option value="Software Engineering for AI-Enabled Systems">Software Engineering for AI-Enabled
                            Systems</option>
                        <option value="Virtual Reality">Virtual Reality</option>
                        <option value="Multimedia Intelligent Systems">Multimedia Intelligent Systems</option>
                        <option value="Cloud Computing">Cloud Computing</option>
                        <option value="IT Project Management ">IT Project Management </option>
                        <option value="Arabic Language Engineering">Arabic Language Engineering</option>
                        <option value="Model Deployment Frameworks">Model Deployment Frameworks</option>
                        <option value="Security Intelligence">Security Intelligence</option>
                        <option value="Special Topics in Artificial Intelligence">Special Topics in Artificial
                            Intelligence</option>
                    </select>
                </div>
            </div>




            <!------------ hardness and credit Hours ---------->

            <div><label class="name">Level of hardness</label><br>
                <input type="range" id="hardness" name="hardness" min="1" max="3" name="hardness">
                <div class="value">moderate</div>
            </div>

            <div class="credit-container">
                <div><label for="creditHrs" class="name">Schedule Credit Hours :</label><br>
                    <input type="number" id="creditHrs" min="3" max="18" name="hours" style="text-align: center;" />
                </div>


                <div>
                    <label class="name" required>Semester: </label><br>
                    <input type="radio" value="first" id="first" name="semester"><label for="first">First </label>
                    &nbsp;&nbsp;
                    <input type="radio" value="second" id="second" name="semester"><label for="second">Second
                    </label>&nbsp;
                    <input type="radio" value="summer" id="summer" name="semester"><label for="summer">Summer </label>
                </div>
            </div>
            <br>
            <button type="submit">Submit</button>


        </form>
    </div>

    <!------------------- FOOTER ------------------->
    <footer>
        <div class="copyright">
            &copy; 2024 KASITopia. All rights reserved.
        </div>
    </footer>



    <!-------------- javascript for the major form ------------- -->
    <script type="text/javascript">
        // window.onload = function () {
        //     var majorFromSession = "<?php echo isset($_SESSION['major']) ? $_SESSION['major'] : ''; ?>".toUpperCase();

        //     if (majorFromSession) {
        //         var majorElement = document.getElementById(majorFromSession);
        //         if (majorElement) {
        //             majorElement.style.display = "block";
        //         } else {
        //             console.log("No element with ID: " + majorFromSession);
        //         }
        //     } else {
        //         alert("Please login to use this service.");
        //     }
        // }

        window.onload = function() {
            var majorFromSession = "<?php echo isset($_SESSION['major']) ? $_SESSION['major'] : ''; ?>".toUpperCase();

            if (majorFromSession) {
                var majorElement = document.getElementById(majorFromSession);
                if (majorElement) {
                    majorElement.style.display = "block";
                } else {
                    console.log("No element with ID: " + majorFromSession);
                }
            } else {
                Swal.fire({
                    title: 'KASITopia says',
                    text: 'Please login to use this service.',
                    icon: 'info',
                    confirmButtonText: 'OK'
                });
            }
        }
        // Prevent form submission if user is not logged in
        document.querySelector('#schedule_form').addEventListener('submit', function(e) {
            var isLogged = <?php echo isset($_SESSION['email']) ? 'true' : 'false'; ?>;
            if (!isLogged) {
                e.preventDefault();
                Swal.fire({
                    title: 'KASITopia says',
                    text: 'Please login to use this service.',
                    icon: 'info',
                    confirmButtonText: 'OK'
                });
            }
        });
    </script>


    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
    <script src="javaScript/schedule.js"></script>
    <script src="javaScript/navbar.js"></script>
    <script src="javaScript/index.js"></script>
    <!-- Link to ionic framework -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>