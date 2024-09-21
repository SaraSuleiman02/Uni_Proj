<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body style="background: url('img/background_login.jpg')no-repeat;background-position: center;background-size: cover;">
    <div class="container">
        <h2>Credit Card Info</h2>
        <form action="credit_database.php"  method="post">
            <div class="form-group">
                
                <label for="username">Name on Card: </label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="password">Card Number:</label>
                <input type="text" id="no" name="no"  required>
            </div>
            <div class="form-group">
                <label for="password">Expiry Date:</label>
                <input type="date" id="exp_date" name="exp_date"  required>
            </div>
            <div class="form-group">
                <label for="password">CVV:</label>
                <input type="text" id="cvv" name="cvv"  required>
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