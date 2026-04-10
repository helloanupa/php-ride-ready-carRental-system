<?php
 
require 'connect.php';

 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pickup_location = $_POST['pickupL'];
    $dropoff_location = $_POST['dropoffL'];
    $pickup_date = $_POST['pickup'];
    $dropoff_date = $_POST['dropoff'];

     
    $sql = "UPDATE booking2 
            SET name = '$name', email = '$email', phone = '$phone',
                pickupL = '$pickup_location', dropoffL = '$dropoff_location',
                pickup = '$pickup_date', dropoff = '$dropoff_date' 
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: read_bookings.php?message=Booking successful!");
    } else {
        echo "Error updating booking: " . $conn->error;
    }

     
    $conn->close();
}
?>
 

 
