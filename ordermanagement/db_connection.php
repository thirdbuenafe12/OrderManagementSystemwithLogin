<?php
// Database credentials
$servername = "localhost"; // Change if different
$username = "third"; // Change to your database username
$password = "third12"; // Change to your database password
$dbname = "db_php_sql"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
