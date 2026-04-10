<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="styles/chat_box.css">
</head>
<body>
    <div class="container">
        <h2>Let's Chat :</h2>
        <form action="contact_insert.php" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Write your message here" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
