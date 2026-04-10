 

<?php
 
require 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    
     
    <link rel="stylesheet" href="styles/read_booking.css">
</head>
<body>
    <h1>Booking list</h1>
     
    
<?php
 
require 'db_connection.php';

 
$sql = "SELECT * FROM booking2";

 
$result = $conn->query($sql);

 
if ($result->num_rows > 0) {
     
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Pick-up Location</th>
            <th>Drop-off Location</th>
            <th>Pick-up Date</th>
            <th>Drop-off Date</th>
            <th>Actions</th>

          </tr>";

     
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['pickupL']}</td>
                <td>{$row['dropoffL']}</td>
                <td>{$row['pickup']}</td>
                <td>{$row['dropoff']}</td>
                <td>
                <button class='button'><a href='edit_booking.php?id={$row['id']}'>Edit</a></button>
                <button class='button'><a href='delete_booking.php?id={$row['id']}' onclick='return confirm(\"Are you sure you want to delete this booking?\");'>Delete</button></a>
                 


                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No bookings found.";
}


$conn->close();
?>
</body>
</html>
