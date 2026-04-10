<?php

$conn = new mysqli("localhost", "root", "", "car_rental");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $fuelType = $_POST['fuelType'];
    $addedDate = $_POST['addedDate'];
    $milage = $_POST['millage'];
    $rentalPrice = $_POST['rentalPrice'];

    $sql = "INSERT INTO car (name, number, fuelType, addedDate, millage, rentalPrice)
            VALUES ('$name', '$number', '$fuelType', '$addedDate', '$milage', '$rentalPrice')";

    if ($conn->query($sql) === TRUE) {
        echo "New car added successfully!";
        echo "<a href='list_cars.php'>View Car List</a>"; // Link to list_cars.php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
