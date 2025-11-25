<?php

// Database connection
$servername = "localhost";
$db_username = "root";   // change if needed
$db_password = "";       // change if needed
$dbname = "myapp";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare statement to prevent SQL injection
$stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    // Verify password
    //if (password_verify($password, $hashed_password)) {
       // echo "✅ Login successful! Welcome, " . htmlspecialchars($username);
   // } 
    if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: dashboard.php");
    exit();
    } 
    else {
        echo "❌ Invalid password.";
    }
} else {
    echo "❌ No user found with that username.";
}

$stmt->close();
$conn->close();
?>