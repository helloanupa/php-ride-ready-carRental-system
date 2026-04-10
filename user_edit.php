<?php
session_start();

require 'db_connection.php';



$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch user data
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows != 1) {
    echo "User not found.";
    exit();
}

$user = $result->fetch_assoc();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $conn->real_escape_string($_POST['username']);
    $new_password = $conn->real_escape_string($_POST['password']);

    
    $update_sql = "UPDATE users SET password = '$new_password' WHERE id = $id";

    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('User updated successfully!'); window.location.href='user_table.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="styles/user.css">
</head>
<body>
    <div class="edit-container">
        <h2>Reset Password</h2>
        <form action="user_edit.php?id=<?php echo $id; ?>" method="POST" onsubmit="return validateEditForm()">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" disabled>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($user['password']); ?>" required>

            <button type="submit">Update</button>
        </form>
        <a href="user_table.php" class="back-button">Back to Dashboard</a>
    </div>
    <script>
        function validateEditForm() {
            var username = document.getElementById("username").value.trim();
            var email = document.getElementById("email").value.trim();
            var errorMessage = "";

            if (username === "" || email === "") {
                errorMessage = "All fields are required.";
                alert(errorMessage);
                return false;
            }

            
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                errorMessage = "Please enter a valid email address.";
                alert(errorMessage);
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
