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
        <!-------- NAVBAR ---------->
        <ul class="navbar navbar-sticky">
            <li><a href="home.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="login.php"><i class="fa-solid fa-user" style="color: #ffffff;"></i>&nbsp; Login /
                    Sign-Up</a>
            </li>
        </ul>
        <div class="login">
            <a href="login.html">Login</a>
        </div>
    </header>
    <br><br><br><br><br><br><br><br>

    <!-------- PRODUCTS ---------->
    <div class="product-container">
        <img class="product-image" src="img/cupset.jpeg" alt="Product 1">
        <p class="product-price">20 JD</p>
        <p class="product-description">A set of Blue Tea Cups (12pcs)</p>
        <!--Add to Cart button-->
        <button class="feedback-btn" onclick="addToCart('A set of Blue Tea Cups (12pcs)', 20)">Add to Cart</button>
    </div>

    <!-- Second product section -->
    <div class="product-container">
        <img class="product-image" src="img/coffecup.jpeg" alt="Product 1">
        <p class="product-price">20 JD</p>
        <p class="product-description">A set of Blue Coffee Cups (12pcs)</p>
        <!-- Add to Cart button -->
        <button onclick="addToCart('A set of Blue Coffee Cups (12pcs)', 20)" class="feedback-btn">Add to Cart</button>
    </div>

    <div class="product-container">
        <img class="product-image" src="img/Coffee_kettle.jpg" alt="Product 1">
        <p class="product-price">15 JD</p>
        <p class="product-description">Coffe Kettle (1 pc)</p>
        <!-- Add to Cart button-->
        <button onclick="addToCart('Coffee Kettle (1 pc)', 15)" class="feedback-btn">Add to Cart</button>
    </div>

    <div class="product-container">
        <img class="product-image" src="img/candle_holder1.jpg" alt="Product 1">
        <p class="product-price">5 JD</p>
        <p class="product-description">Candle Holder (1 pc)</p>
        <!-- Add to Cart button-->
        <button onclick="addToCart('Candle Holder (1 pc)', 5)" class="feedback-btn">Add to Cart</button>
    </div>

    <div class="product-container">
        <img class="product-image" src="img/candle_holder2.jpg" alt="Product 1">
        <p class="product-price">5 JD</p>
        <p class="product-description">Candle Holder (1 pc)</p>
        <!-- Add to Cart button-->
        <button onclick="addToCart('Candle Holder (1 pc)', 5)" class="feedback-btn">Add to Cart</button>
    </div>


    <br><br><br><br>


    <!-- CART SECTION -->
    <div class="cart">
        <center>
            <h2>Shopping Cart</h2>
        </center>
        <ul id="cart-items"></ul>
        <center>
            <p id="cart-total">Total: 0 JD</p>
        </center>
    </div>
    <br><br><br>

    <!-- PAYMENT METHOD SECTION-->
    <div class="cart">
        <center>
            <h2>Payment method</h2>
            <h6>Choose your payment method</h6>
            <br>
            <button type="button" class="pay-button"><a href="credit.php">Credit Card</a></button>
            <br><br>
            <button type="button" class="pay-button"><a href="cash.php">Cash</a></button>
            <br><br>
        </center>
    </div>

    <script>
        // Shopping cart functionality
        const cartItems = [];
        const cartTotalElement = document.getElementById('cart-total');
        const cartItemsElement = document.getElementById('cart-items');

        function addToCart(productName, price) {
            cartItems.push({ name: productName, price: price });
            updateCart();
        }

        function removeFromCart(index) {
            cartItems.splice(index, 1);
            updateCart();
        }

        function updateCart() {
            cartItemsElement.innerHTML = '';
            let total = 0;

            for (let i = 0; i < cartItems.length; i++) {
                const listItem = document.createElement('li');
                listItem.className = 'cart-item';
                listItem.innerHTML = `
                    <span>${cartItems[i].name} - ${cartItems[i].price.toFixed(2)} JD</span>
                    <button class="remove-button" onclick="removeFromCart(${i})">Remove</button>
                `;
                cartItemsElement.appendChild(listItem);
                total += cartItems[i].price;
            }

            cartTotalElement.textContent = `Total: ${total.toFixed(2)} JD`;
        }
    </script>

</body>

</html>