<?php
session_start();

require 'db_connection.php';



$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, username, email, password FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - User Management</title>
    <link rel="stylesheet" href="styles/user.css">
    <script>
        function confirmDelete(username, id) {
            if (confirm("Are you sure you want to delete user '" + username + "'?")) {
                window.location.href = "user_delete.php?id=" + id;
            }
        }
    </script>
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
        <a href="logout.php" class="logout-button">Logout</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['password']) . "</td>";
                        echo "<td>
                                <a href='user_edit.php?id=" . $row['id'] . "' class='edit-button'>Edit</a>
                                <button onclick=\"confirmDelete('" . addslashes($row['username']) . "', " . $row['id'] . ")\" class='delete-button'>Delete</button>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No users found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>
