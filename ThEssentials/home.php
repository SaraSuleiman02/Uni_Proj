<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TH Essentials</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0f872f3edd.js" crossorigin="anonymous"></script>

    <!-- Fonts From Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <header style="background-color: #8e793f;">
        <br>
        <a href="#home" class="logo"><img src="img/logo.png" alt=""></a>

        <div class="" id="menu-icon">
        </div>
        <!-- NAVBAR -->
        <ul class="navbar navbar-sticky">
            <li><a href="#home">Home</a></li>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="login.php"><i class="fa-solid fa-user" style="color: #ffffff;"></i>&nbsp; Login /
                    Sign-Up</a>
            </li>
        </ul>
        <div class="login">
            <a href="login.html">Login</a>
        </div>
    </header>

    <!------------------ HOME SECTION ------------------->

    <section class="home" id="home">
        <div class="home-text">
            <h1>TH Essentials</h1>
            <p>The best online shop </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="products.php" class="home-btn" onclick="navigateToPage1()">Shop Now!</a>
        </div>
    </section>

    <!---------------- ABOUT US SECTION ----------------->
    <div class="about-us" id="about-us">
        <div class="heading">
            <h1>About Us</h1>

        </div>
        <section class="about-us">
            <div class="content">
                <h2>Welcome to TH Essentials,</h2>
                <p>your go-to destination for all your home essentials needs! At TH Essentials, we understand the
                    importance of turning your house into a comfortable and stylish home. We're here to help you
                    make
                    your living spaces more inviting, functional, and beautiful.

                    Our mission is simple: to provide high-quality home essentials that enhance your everyday life.
                    Whether you're setting up your first apartment, renovating your dream home, or just looking to
                    refresh your living spaces, we have the products you need to create a cozy and functional
                    environment.. </p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <a href="#feedback" class="feedback-btn">See Feedback</a>

            </div>
    </div>
    <br><br><br><br>

    <!---------------- SLIDE SHOW SECTION---------------->
    <div class="slideshow-section" id="feedback">
        <div class="slideshow-container">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/feedback1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/feedback2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/feedback3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>


    <br><br><br><br>

    <!-- Footer -->
    <footer>
        <div class="instagram-link">
            <i class="fa-brands fa-instagram" style="color: #ffffff;">
                <a href="https://instagram.com/th__essentials?igshid=MzRlODBiNWFlZA==">TH Essentials</a></i>
        </div>

        <div class="copyright">
            &copy; 2022 TH Essentials. All rights reserved.
        </div>

        <div class="contact-info">
            Contact Us:<br>
            Email: TH@hotmail.com<br>
            Phone: +962 7 80001 1123<br>


        </div>
    </footer>



    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>