<?php
$host = "localhost"; // XAMPP default host
$username = "root"; // Default username in XAMPP
$password = ""; // No password by default
$database = "car_rental"; // Name of your database

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>