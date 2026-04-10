<?php
include 'db_connection.php';


$sql = "SELECT * FROM messages ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Messages</title>

    <link rel="stylesheet" href="styles/contact_read.css">

   
</head>
<body>
    <div class="container">
        <h2>Messages</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
              
                <th>Actions</th>
            </tr>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                  
                        <td>
                            <a href="contact_update.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a href="contact_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this message?');">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="6">No messages found.</td></tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>

