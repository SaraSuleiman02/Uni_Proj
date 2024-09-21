<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body style="background: url('img/background_login.jpg')no-repeat;background-position: center;background-size: cover;">
    <div class="container">
        <h2>Login</h2>
        <form action="login_database.php"  method="post">
            <div class="form-group">
                
                <label for="username">Email: <ion-icon name="mail-outline" class="icon"></ion-icon></label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:<ion-icon name="lock-closed-outline" class="icon2"></ion-icon></label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="form-group text-center">
                <button type="submit" name="submit" class="btn-login"><a href="home2.html">Login</a></button>
            </div>

            <div class="sign-up">
                <p>Don't have an account? <br><a href="sign-up.php">Sign Up</a></p>
            </div>
        </form>
    </div>
    
    <!-- Link to ionic framework -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>