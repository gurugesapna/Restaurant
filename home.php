<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="animate-fade">
        <nav>
            <ul>
            <li><a href="home.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="reservation.php">Reservation</a></li>
              
               <!-- Sign In and Register links on the right side -->
            <div class="auth-links">
                <li><a href="signin.php">Sign In</a></li>
                <li><a href="register.php">Register</a></li>
            </div>
                

            </ul>
        </nav>
    </header>



<!-- Section 1: Hero Section -->
<section id="hero">
    <div class="hero-content">
        <h1>Welcome to Our Restaurant</h1>
        <p>Experience the best dining with fresh ingredients and a cozy atmosphere.</p>
        <a href="reservation.html" class="cta-button">Make a Reservation</a>
    </div>
</section>


<!-- Section 2: Services Section -->
<section id="services">
    <h2>Our Services</h2>
    <div class="service-cards">
        <div class="service-card">
            <h3>Online Order and Free Delivery</h3>
            <p>Place your order online and enjoy the convenience of free delivery right to your doorstep</p><br>
            <img src="image/1.jpg" alt="Fine Dining" class="service-image">
        </div>
        <div class="service-card">
          
             <h3>Private Events</h3>
            <p>Book our private rooms for corporate events, weddings, and special occasions.</p><br>
            <img src="image/2.jpg" alt="Private Events" class="service-image">
        </div>
        <div class="service-card">
           
            <h3>Catering</h3>
            <p>We provide top-notch catering services for any event, big or small.</p><br>
            <img src="image/3.webp" alt="Catering" class="service-image">
        </div>
    </div>
</section>


<!-- Section 3: About Us Section -->
<section id="about">
    <div class="about-container">
        <div class="about-content">
            <h2>About Us</h2>
            <p>We have been serving the community for over 20 years, offering a diverse menu that caters to all tastes. Our commitment to quality and customer satisfaction has made us a favorite dining destination in the area.</p>
            <p>Our chefs are dedicated to crafting dishes that not only taste amazing but also celebrate local and seasonal ingredients. We believe in creating meals that are both delicious and sustainable.</p>
        </div>
        <div class="about-image">
            <img src="image/4.jpg" alt="Restaurant Interior">
        </div>
    </div>
</section>



<!-- Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-section about">
            <h3>About Us</h3> <br>
            <p>Welcome to our restaurant! We pride ourselves on offering the best dining experience with fresh ingredients and a cozy atmosphere.</p>
        </div>
        <div class="footer-section social">
            <h3>Follow Us</h3> <br>
            <a href="https://www.facebook.com/your-page" target="_blank">
                <img src="image/fb.png" alt="Facebook" class="social-icon">
            </a>
        </div>
        <div class="footer-section contact">
            <h3>Contact Us</h3>  <br> <p>Golle Road <br> Baddegama <br> Galle</p>
            <p><i class="fa fa-phone"></i> 091 4342 790</p>
            <p><i class="fa fa-envelope"></i> k&c@restaurant.com</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 K & C Restaurant . All rights reserved.</p>
    </div>
</footer>




    
    <script src="scripts.js" defer></script>
</body>

</html>






