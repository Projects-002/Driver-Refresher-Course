<?php

// Database configuration
$servername = "localhost";
$username = "root";
$password = "22092209";
$dbname = "driving_license";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>