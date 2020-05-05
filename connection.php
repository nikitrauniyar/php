<?php
echo "This is my first PHP script<br>";
echo "Welcome to my PHP page<br>";

$servername = "localhost";
$username = "root";
$password = "";
$db= "VehicleManagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>