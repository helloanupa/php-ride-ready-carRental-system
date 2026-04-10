<?php

$username = $new_password = $confirm_password = "";
$error = "";
$showTable = false; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $new_password = $_POST['newPassword'];
    $confirm_password = $_POST['confirm_password'];

    
    if ($new_password != $confirm_password) {
        $error = "Passwords do not match!";
    } else {
        
        $showTable = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            background-color: #FFFF66;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-bottom: 20px;
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
        }

        input[type="text"], input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th {
            background-color: #FF9900;
        }

        td {
            background-color: #FFFFCC;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        .result-table {
            width: 400px;
            margin-top: 20px;
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity:1;
        }

        
        .deletebtn {
            float: left;
            width: 50%;
        }

        
        .deletebtn {
            background-color: #f44336;
        }

    </style>
</head>
<body>



<?php if ($showTable): ?>
<div class="result-table">
    <h3>Form Submitted Successfully</h3>
    <table>
        <tr>
            <th>Username</th>
            <th>New Password</th>
        </tr>
        <tr>
            <td><?php echo htmlspecialchars($username); ?></td>
            <td><?php echo htmlspecialchars($new_password); ?></td>
            <td><a href="delete_user.php">
                <button type="button" class="deletebtn" id="deletebtn">Delete</button>
                </a>
            </td>
        </tr>
    </table>
</div>
<?php endif; ?>

</body>
</html>
