<?php
$servername = "localhost";
$db_username = "root";   // change if needed
$db_password = "";       // change if needed
$dbname = "user_db";


$conn = new mysqli($servername, $db_username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>