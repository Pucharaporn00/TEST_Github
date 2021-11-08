<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$db = "istudio";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>