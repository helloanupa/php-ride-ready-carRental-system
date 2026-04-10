<?php
require 'db_connection.php';

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input
    $user = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $pass = $conn->real_escape_string($_POST['password']);

    // Check if username or email already exists
    $check_sql = "SELECT * FROM users WHERE username = '$user' OR email = '$email'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Username or email already exists
        echo "<script>alert('Username or Email already exists!'); window.location.href='register.html';</script>";
    } else {
        // Insert user into database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                alert('Registration successful');
                window.location.href = 'login.php';
            </script>";

            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="styles/user.css">
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form id="registerForm" action="register.php" method="POST" onsubmit="return validateForm()">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button type="submit">Register</button>

            <br><br>

            <button>Log in</button>
        </form>
        <div id="errorMessage" style="color: red;"></div>
    </div>
    <script src="register.js"></script>
</body>
</html>
