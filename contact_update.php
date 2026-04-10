<?php
include 'db_connection.php';

// Check if the id is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the message to be edited
    $sql = "SELECT * FROM messages WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

// Update the message
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "UPDATE messages SET name='$name', email='$email', message='$message' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: contact_read.php"); // Redirect to view page after update
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Message</title>
    <link rel="stylesheet" href="styles/contact_styles.css">
</head>
<body>
    <div class="container">
        <h2>Edit Message</h2>
        <form action="" method="post">
            <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
            <textarea name="message" required><?php echo $row['message']; ?></textarea>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>

<?php
$conn->close();
?>
