<?php

$conn = new mysqli("localhost", "root", "", "car_rental");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "SELECT * FROM car WHERE id='$id'";
$result = $conn->query($sql);
$car = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $fuelType = $_POST['fuelType'];
    $addedDate = $_POST['addedDate'];
    $milage = $_POST['millage'];
    $rentalPrice = $_POST['rentalPrice'];

    $sql = "UPDATE car
            SET name='$name', number='$number', fuelType='$fuelType', addedDate='$addedDate', millage='$milage', rentalPrice='$rentalPrice'
            WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Car details updated successfully!";
        header("Location: list_cars.php"); 
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car</title>
    <link rel="stylesheet" href="styles/add_car.css">
</head>
<body>
    <h2>Edit Car</h2>
    <form action="" method="post">
        <label>Car Name:</label>
        <input type="text" name="name" value="<?php echo $car['name']; ?>" required><br>
        <label>Vehicle Number:</label>
        <input type="text" name="number" value="<?php echo $car['number']; ?>" required><br>
        <label>Fuel Type:</label>
        <select name="fuelType" required>
            <option value="petrol" <?php if($car['fuelType'] == 'petrol') echo 'selected'; ?>>Petrol</option>
            <option value="diesel" <?php if($car['fuelType'] == 'diesel') echo 'selected'; ?>>Diesel</option>
            <option value="electric" <?php if($car['fuelType'] == 'electric') echo 'selected'; ?>>Electric</option>
        </select><br>
        <label>Added Date:</label>
        <input type="date" name="addedDate" value="<?php echo $car['addedDate']; ?>" required><br>
        <label>Milage:</label>
        <input type="number" name="millage" value="<?php echo $car['millage']; ?>" required><br>
        <label>Rental Price:</label>
        <input type="number" name="rentalPrice" value="<?php echo $car['rentalPrice']; ?>" required><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
