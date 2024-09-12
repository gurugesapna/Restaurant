<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu with Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
            <li><a href="home.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="reservation.php">Reservation</a></li>
            
            </ul>
        </nav>
    </header>

    <main>
        <h1>Our Menu</h1>
        <p>Check out our delicious offerings.</p> <br>
       
        <div class="search-container">
            <input type="text" id="menu-search" placeholder="Search for items..." onkeyup="filterMenu()">
            <i class="search-icon"></i> <!-- Search Icon -->
        </div>
        <br>

        <div class="menu-and-cart">
            <div class="menu-container">
                <nav class="tabs">
                    <button class="tablinks" onclick="openCategory(event, 'Rice')">Rice</button>
                    <button class="tablinks" onclick="openCategory(event, 'Kottu')">Kottu</button>
                    <button class="tablinks" onclick="openCategory(event, 'Noodles')">Noodles</button>
                    <button class="tablinks" onclick="openCategory(event, 'Burger')">Burger</button>
                    <button class="tablinks" onclick="openCategory(event, 'Pizza')">Pizza</button>
                </nav>

                <!-- Rice Category -->
                <div id="Rice" class="tabcontent">
                    <div class="menu-item">
                        <img src="image/11.jpeg" alt="Special Fried Rice">
                        <h3>Special Fried Rice</h3>
                        <p>Description of the special fried rice.</p>
                        <p>Rs: 1990.00</p> <br>
                        <button class="add-to-cart" data-name="Special Fried Rice" data-price="RS:1990.00">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/12.jpg" alt="Seafood Rice">
                        <h3>Seafood Rice</h3>
                        <p>Description of the seafood rice.</p>
                        <p>Rs: 1200.00</p>
                        <button class="add-to-cart" data-name="Seafood Rice" data-price="RS:3490.00">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/13.jpg" alt="" ><br>
                        <h3>Egg Fried Rice</h3>
                        <p>Description of the egg fried rice.</p>
                        <p>Rs: 990.00</p>
                        <button class="add-to-cart" data-name="Egg Fried Rice" data-price="RS:990.00">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/14.jpg"alt="Veg Fried Rice">
                        <h3>Veg Fried Rice</h3>
                        <p>Description of the veg fried rice.</p>
                        <p>Rs: 850.00</p>
                        <button class="add-to-cart" data-name="Veg Fried Rice" data-price="RS:850.00">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/15.jpg" alt="">
                        <h3>Biryani</h3>
                        <p>Description of the biryani.</p>
                        <p>Rs: 2500.00</p>
                        <button class="add-to-cart" data-name="Biryani" data-price="RS:2500.00">Add to Cart</button>
                    </div>
                </div>

                <!-- Kottu Category -->
                <div id="Kottu" class="tabcontent" style="display:none;">
                    <div class="menu-item">
                        <img src="image/16.jpg" alt="Chicken Kottu">
                        <h3>Chicken Kottu</h3>
                        <p>Description of the chicken kottu.</p>
                        <p>Rs:1290.00</p>
                        <button class="add-to-cart" data-name="Chicken Kottu" data-price="RS:1290.00">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/17.jpg" alt="Chicken Cheese Kottu">
                        <h3>Chicken Cheese Kottu</h3>
                        <p>Description of the chicken cheese kottu.</p>
                        <p>Rs: 1490.00</p>
                        <button class="add-to-cart" data-name="Chicken Cheese Kottu" data-price="RS:1490.00">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/18.jpg" alt="Beef Kottu">
                        <h3>Beef Kottu</h3>
                        <p>Description of the beef kottu.</p>
                        <p>Rs: 3490.00</p>
                        <button class="add-to-cart" data-name="Beef Kottu" data-price="RS:3490.00">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/19.webp" alt="Pork Kottu">
                        <h3>Pork Kottu</h3>
                        <p>Description of the pork kottu.</p>
                        <p>Rs: 3490.00</p>
                        <button class="add-to-cart" data-name="Pork Kottu" data-price="250">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/20.jpg" alt="Vegetable & Cheese Kottu">
                        <h3>Vegetable & Cheese Kottu</h3>
                        <p>Description of the vegetable & cheese kottu.</p>
                        <p>Rs: 1250.00</p>
                        <button class="add-to-cart" data-name="Vegetable & Cheese Kottu" data-price="250">Add to Cart</button>
                    </div>
                </div>

                <!-- Noodles Category -->
                <div id="Noodles" class="tabcontent" style="display:none;">
                    <div class="menu-item">
                        <img src="image/21.jpg" alt="Chicken Noodles">
                        <h3>Chicken Noodles</h3>
                        <p>Description of the chicken noodles.</p>
                        <p>Rs: 1100.00</p>
                        <button class="add-to-cart" data-name="Chicken Noodles" data-price="100">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/22.jpg" alt="Cheese Chicken Noodles">
                        <h3>Cheese Chicken Noodles</h3>
                        <p>Description of the cheese chicken noodles.</p>
                        <p>Rs: 1400.00</p>
                        <button class="add-to-cart" data-name="Cheese Chicken Noodles" data-price="200">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/23.webp" alt="Egg & Spicy Noodles"> 
                        <h3>Egg & Spicy Noodles</h3>
                        <p>Description of the egg & spicy noodles.</p>
                        <p>Rs: 990.00</p>
                        <button class="add-to-cart" data-name="Egg & Spicy Noodles" data-price="300">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/24.jpg" alt="Veg Noodles">
                        <h3>Veg Noodles</h3>
                        <p>Description of the veg noodles.</p>
                        <p>Rs: 850.00</p>
                        <button class="add-to-cart" data-name="Veg Noodles" data-price="150">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/25.jpg" alt="Chilli Oil Noodles">
                        <h3>Chilli Oil Noodles</h3>
                        <p>Description of the chilli oil noodles.</p>
                        <p>Rs: 990.00</p>
                        <button class="add-to-cart" data-name="Chilli Oil Noodles" data-price="250">Add to Cart</button>
                    </div>
                </div>

                <!-- Burger Category -->
                <div id="Burger" class="tabcontent" style="display:none;">
                    <div class="menu-item">
                        <img src="image/26.webp" alt="Beef Burger">
                        <h3>Beef Burger</h3>
                        <p>Description of the beef burger.</p>
                        <p>Rs: 350.00</p>
                        <button class="add-to-cart" data-name="Beef Burger" data-price="100">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/27.png" alt="Cheese Burger">
                        <h3>Cheese Burger</h3>
                        <p>Description of the cheese burger.</p>
                        <p>Rs: 300.00</p>
                        <button class="add-to-cart" data-name="Cheese Burger" data-price="200">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/28.jpg" alt="Chicken Burger">
                        <h3>Chicken Burger</h3>
                        <p>Description of the chicken burger.</p>
                        <p>Rs: 350.00</p>
                        <button class="add-to-cart" data-name="Chicken Burger" data-price="300">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/29.jpg" alt="Veg Burger">
                        <h3>Egg Burger</h3>
                        <p>Description of the Egg burger.</p>
                        <p>Rs: 250.00</p>
                        <button class="add-to-cart" data-name="Veg Burger" data-price="150">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/30.jpg" alt="Fish Burger">
                        <h3>Fish Burger</h3>
                        <p>Description of the fish burger.</p>
                        <p>Rs: 250.00</p>
                        <button class="add-to-cart" data-name="Fish Burger" data-price="250">Add to Cart</button>
                    </div>
                </div>

                <!-- Pizza Category -->
                <div id="Pizza" class="tabcontent" style="display:none;">
                    <div class="menu-item">
                        <img src="image/31.jpg" alt="Cheese Pizza">
                        <h3>Cheese Pizza</h3>
                        <p>Description of the cheese pizza.</p>
                        <p>Rs: 1000.00</p>
                        <button class="add-to-cart" data-name="Cheese Pizza" data-price="100">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/32jpg.jpg" alt="Chicken Pizza">
                        <h3>Chicken Pizza</h3>
                        <p>Description of the chicken pizza.</p>
                        <p>Rs: 1200.00</p>
                        <button class="add-to-cart" data-name="Chicken Pizza" data-price="200">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/33.webp" alt="Pepperoni Pizza">
                        <h3>Pepperoni Pizza</h3>
                        <p>Description of the pepperoni pizza.</p>
                        <p>Rs: 1300.00</p>
                        <button class="add-to-cart" data-name="Pepperoni Pizza" data-price="300">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/34.jpg" alt="Veg Pizza">
                        <h3>Veg Pizza</h3>
                        <p>Description of the veg pizza.</p>
                        <p>Rs: 900.00</p>
                        <button class="add-to-cart" data-name="Veg Pizza" data-price="150">Add to Cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="image/35.jpg" alt="Meat Lovers Pizza">
                        <h3>Meat Lovers Pizza</h3>
                        <p>Description of the meat lovers pizza.</p>
                        <p>Rs: 1250.00</p>
                        <button class="add-to-cart" data-name="Meat Lovers Pizza" data-price="250">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Cart Section -->
            <div class="cart-container">
                <h2>Your Cart</h2>
                <ul id="cart-items"></ul>
                <p>Total: Rs. <span id="cart-total">0</span></p>
                <button id="checkout-button">Checkout</button>
            </div>
        </div>


        
    </main>
     
  

    <script src="scripts.js"></script>
</body>
</html>

