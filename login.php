<?php
session_start();

require 'db_connection.php';

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user = $conn->real_escape_string($_POST['username']);
    $pass = $conn->real_escape_string($_POST['password']);

    
    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        echo "<script>alert('Login Successful !'); window.location.href='admin.html';</script>";
        
    } else {
        
        echo "<script>alert('Invalid username or password!'); window.location.href='login.php';</script>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/user.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm" action="login.php" method="POST" onsubmit="return validateForm()">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <div id="errorMessage" style="color: red;"></div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
