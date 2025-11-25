<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .register-box {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 350px;
    }
    .register-box h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .register-box input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .register-box input[type="submit"] {
      background: #007BFF;
      color: white;
      border: none;
      cursor: pointer;
    }
    .register-box input[type="submit"]:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <div class="register-box">
    <h2>Register</h2>
    <form method="post" action="process_register.php">
      <input type="text" name="username" placeholder="Username" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Register">
    </form>
  </div>
</body>
</html>