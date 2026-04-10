<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset - RideReady Car Rental</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/reset_password.css">
    <script src="script/reset_password.js"></script>
</head>
<body>

    <header>
        <div class="logo"><img src="icons/logo.png" width="50px" height="50px"> RideReady Car Rental System</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="car_details.html">Car details</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="about_us.html">About us</a></li>
                <li><a href="contact.html">Contact us</a></li>
                <li><a href="blog.html">Blog</a></li>
            </ul>
        </nav>
        <div class="login-section">
            <a href="login.php">
                <button class="btn">Log in</button>
            </a>
            <a href="admin.html">
                <button class="btn">Dashboard</button>
            </a>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="reset-password-box">
                <h2>Reset your password</h2>

                <form action="reset_password_process.php" method="post">
                    <label for="username">User name</label>
                    <input type="text" id="username" name="username" required><br>

                    <label for="newPassword">New password</labe>
                    <input type="password" id="newPassword" name="newPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>

                    <label for="confirm_password">Confirm your new password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required><br>

                    <p id="message"></p><br>

                    <button type="submit" id="resetBtn" class="resetBtn" onclick="checkPassword()">Reset</button>
                </form>

            </div>
        </div>
    </main>

    <footer>
        <div class="footer-links">
            <a href="#">Help</a> |
            <a href="#">Rental Information</a> |
            <a href="#">Terms and Conditions</a>
        </div>
        <div class="social-media">
            <a href="https://www.instagram.com">
				<img src="icons/instagram.png" alt="instagram" width="3%" height="3%">
			</a>

            <a href="https://web.facebook.com/?_rdc=1&_rdr">
				<img src="icons/facebook.png" alt="Facebook" width="3%" height="3%">
			</a>

            <a href="https://lk.linkedin.com/">
				<img src="icons/linkedin.png" alt="Linkedin" width="3%" height="3%">
			</a>

            <a href="https://x.com/?lang=en">
				<img src="icons/x.png" alt="X" width="3%" height="3%">
			</a>
        </div>
        <div class="app-links">
            <a href="https://www.apple.com/app-store/">
				<img src="icons/applestore.png" alt="Download on the App Store" width="10%" height="3%">
			</a>

            <a href="https://lk.linkedin.com/">
				<img src="icons/googlestore.png" alt="Get it on Google Play" width="10%" height="3%">
			</a>
        </div>
        <p>&copy; RideReady 2024</p>
    </footer>

    
    
</body>
</html>
