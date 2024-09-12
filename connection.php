<?php
$host = 'localhost'; // Your database host, usually 'localhost'
$user = 'root'; // Your database username (default is 'root' in XAMPP)
$password = ''; // Your database password (leave empty if using XAMPP default)
$dbname = 'myrestaurant'; // Your database name

// Create a connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database!";
}
?>














