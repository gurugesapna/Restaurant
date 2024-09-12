<?php
// Database configuration
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

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $date = $conn->real_escape_string($_POST['date']);
    $time = $conn->real_escape_string($_POST['time']);

    // SQL query to insert reservation data
    $sql = "INSERT INTO reservations (name, email, phone, reservation_date, reservation_time) 
            VALUES ('$name', '$email', '$phone', '$date', '$time')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation made successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
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
        <h1>Make a Reservation</h1>
        <div class="split-container">
            <div class="form-container">
                <form action="reservation.php" method="post" id="reservationForm">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <br>
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" required>
                    <br>
                    <label for="date">Reservation Date:</label>
                    <input type="date" id="date" name="date" required>
                    <br>
                    <label for="time">Reservation Time:</label>
                    <input type="time" id="time" name="time" required>
                    <br>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
