<?php

include 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);
    
    
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    
    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Message submitted successfully!');
            window.location.href = 'admin.html';
        </script>";
    } else {
        echo "<script>
            alert('Message submition error !');
            
        </script>";
    }

    
    $conn->close();
}
?>
