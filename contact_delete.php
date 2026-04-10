<?php
include 'db_connection.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $sql = "DELETE FROM messages WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: contact_read.php"); 
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
