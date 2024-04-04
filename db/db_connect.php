<?php
// Database credentials
$host = "localhost:3307"; 
$db_username = "camilo"; 
$db_password = "password123"; 
$db_name = "twitter-db"; 

// Attempt to connect to MySQL database
$mysqli = new mysqli($host, $db_username, $db_password, $db_name);

// Check connection
if($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
