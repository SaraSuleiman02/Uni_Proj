<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body style="background: url('img/background_login.jpg')no-repeat;background-position: center;background-size: cover;">
    <div class="container">
        <h2>Cash Info</h2>
        <form action="cash_database.php"  method="post">
            <div class="form-group">
                
                <label for="username">Location: </label>
                <input type="text" id="loc" name="loc" required>
            </div>
            <div class="form-group">
                <label for="password">Phone number:</label>
                <input type="tel" id="phone" name="phone" pattern="07[7-9]{1}[0-9]{7}"  required>
            </div>
            
            <div class="form-group text-center">
                <button type="submit" name="submit" class="btn-login"><a href="home2.php">Pay Now</a></button>
            </div>
        </form>
    </div>
    
    <!-- Link to ionic framework -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>