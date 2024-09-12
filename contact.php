<?php
// PHP code for handling form submission and database insertion

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myrestaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
    <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="styles.css"> <!-- Corrected CSS file path -->
    
    <!-- Link to the external JavaScript file -->
    <script src="scripts.js" defer></script> <!-- Corrected JS file path -->
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
        <h1>Contact Us</h1>
        <div class="contact-container">
            <div class="contact-form">
                <form id="contactForm" method="POST" action="contact.php">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <br>
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" required>
                    <br>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    <br>
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div class="contact-feedback">
                <h2>Feedback & Details</h2>
                <p>We appreciate your feedback. Feel free to reach out through the form or call us at the number below.</p>
                <p>Phone: (123) 456-7890</p>
                <p>Address: 123 Foodie Lane, Culinary City, FL 12345</p>
            </div>
        </div>
    </main>
</body>
</html>
