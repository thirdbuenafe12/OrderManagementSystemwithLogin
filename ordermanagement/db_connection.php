<?php

$servername = "localhost"; 
$username = "third"; 
$password = "third12"; 
$dbname = "db_php_sql"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
