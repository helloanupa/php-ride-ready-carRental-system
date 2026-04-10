<?php
 
require 'connect.php';
 

 
if (isset($_GET['id'])) {
    $id = $_GET['id'];

     
    $sql = "SELECT * FROM booking2 WHERE id = $id";
    $result = $conn->query($sql);

    
     
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Booking not found!";
        exit;
    }
} else {
    echo "No booking ID provided!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <link rel="stylesheet" href="styles/edit_booking.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     
</head>
<body>
    <h2>Edit Booking</h2>
    <form action="update_booking.php" method="POST" id="updateForm">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
        Pick-up Location: <input type="text" name="pickupL" value="<?php echo $row['pickupL']; ?>"><br>
        Drop-off Location: <input type="text" name="dropoffL" value="<?php echo $row['dropoffL']; ?>"><br>
        Pick-up Date: <input type="date" name="pickup" value="<?php echo $row['pickup']; ?>"><br>
        Drop-off Date: <input type="date" name="dropoff" value="<?php echo $row['dropoff']; ?>"><br>
        
        <input type="submit" value="Update Booking" onclick="showUpdateSuccess(event)">
    </form>
    <script>
         
        function showUpdateSuccess(event) {
            event.preventDefault();  

             
            Swal.fire({
                title: 'Update Successful!',
                text: 'Your booking has been updated successfully.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                     
                    document.getElementById("updateForm").submit();
                }
            });
        }
    </script>
     

</body>
</html>
