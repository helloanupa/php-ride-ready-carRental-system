<?php
session_start();

require 'db_connection.php';



if (!isset($_GET['id'])) {
    header("Location: user_table.php");
    exit();
}

$id = intval($_GET['id']);

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$delete_sql = "DELETE FROM users WHERE id = $id";

if ($conn->query($delete_sql) === TRUE) {
    echo "<script>alert('User deleted successfully!'); window.location.href='user_table.php';</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
