<?php

include 'db_connection.php';

 
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$pickup_location = $_POST["pickuploca"];
$dripoff_location = $_POST["dropoffloca"];
$pickupdate = $_POST["pickupdate"];
$dropoffdate = $_POST["dropoffdate"];


$sql = "INSERT INTO booking2 VALUES('','$name','$email','$phone','$pickup_location','$dripoff_location','$pickupdate','$dropoffdate')"; 

if($conn->query($sql)){
    echo"<script>
    		alert('Booking successful');
			window.location.href = 'admin.html';
	</script>";

}
else{
    echo"<script>
    		alert('Booking unsuccessful');
	</script>";
}

$conn->close();

?>