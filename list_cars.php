<?php

$conn = new mysqli("localhost", "root", "", "car_rental");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM car";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Cars</title>
    <link rel="stylesheet" href="styles/list_cars.css">
</head>
<body>
    <h2>List of Cars</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Car Name</th>
            <th>Vehicle Number</th>
            <th>Fuel Type</th>
            <th>Added Date</th>
            <th>Milage</th>
            <th>Rental Price</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["number"] . "</td>
                        <td>" . $row["fuelType"] . "</td>
                        <td>" . $row["addedDate"] . "</td>
                        <td>" . $row["millage"] . "</td>
                        <td>" . $row["rentalPrice"] . "</td>
                        <td>
                            <a href='update_car.php?id=" . $row["id"] . "'>Edit</a> |
                            <a href='delete_car.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No cars available</td></tr>";
        }
        ?>
    </table>
</body>
</html>
<?php
$conn->close();
?>
