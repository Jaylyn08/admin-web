<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        .container { width: 700px; margin: 50px auto; background: #fff; padding: 20px; border-radius: 8px; }
        h2 { color: #333; }
        .nav { margin-bottom: 20px; }
        .nav a { margin-right: 15px; text-decoration: none; color: #007BFF; }
        .nav a:hover { text-decoration: underline; }
        .card { background: #fafafa; padding: 15px; margin: 10px 0; border: 1px solid #ddd; border-radius: 6px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Dashboard</h2>
        <p>Welcome, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</p>

        <div class="nav">
            <a href="dashboard.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </div>

        <h3>Your Overview</h3>
        <div class="card">📌 Account Status: Active</div>
        <div class="card">📌 Last Login: <?php echo date("Y-m-d H:i:s"); ?></div>
        <div class="card">📌 Messages: 0 new</div>
    </div>
</body>
</html>