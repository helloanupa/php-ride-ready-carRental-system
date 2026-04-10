<?php

$conn = new mysqli("localhost", "root", "", "car_rental");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM car WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Car deleted successfully!";
    header("Location: list_cars.php"); 
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
