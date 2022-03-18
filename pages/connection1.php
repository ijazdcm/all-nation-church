<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database_name = "prayer";

// Get connection object and set the charset
$conn = mysqli_connect($host, $username, $password, $database_name);

// echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>connect";
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
