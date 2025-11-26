<?php
// profile_form.php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data safely
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    $bio = htmlspecialchars($_POST['bio']);

    echo "<h2>Profile Information Submitted:</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Age: $age <br>";
    echo "Bio: $bio <br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            background: #f9f9f9;
        }
        input, textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
        }
        input[type="submit"] {
            background: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #45a049;
        }
    </style>
</head>
<body>

<h1>Create Your Profile</h1>
<form method="POST" action="">
    <label for="name">Full Name:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="age">Age:</label>
    <input type="number" name="age" min="1" required>

    <label for="bio">Short Bio:</label>
    <textarea name="bio" rows="4"></textarea>

    <input type="submit" value="Submit Profile">
</form>

</body>
</html>