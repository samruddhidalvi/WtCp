<?php
// db.php
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "hardware_store"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
