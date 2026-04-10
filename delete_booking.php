<?php
require 'db_connection.php';  

if (isset($_GET['id'])) {
    $id = $_GET['id'];

     
    $sql = "DELETE FROM booking2 WHERE id = ?";

     
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);  

     
    if ($stmt->execute()) {
        echo "<script>
            alert('Delete successful');
            window.location.href = 'booking.php';
        </script>";

        exit();
    } else {
        echo "Error deleting booking: " . $conn->error;
    }

     
    $stmt->close();
}

 
$conn->close();
?>
