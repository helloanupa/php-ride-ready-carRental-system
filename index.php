<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RideReady Car Rental System</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/popup.css">
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
            <a href="register.php">
                <button class="btn">Log in</button>
            </a>
            <a href="admin.html">
                <button class="btn">Dashboard</button>
            </a>
        </div>
    </header>

    <main>
        <section class="welcome-section">
            <marquee><h1>Welcome !!!</h1></marquee>
            <div>
                <img src="images/home.jpg" width="1080px" height="620px">
            </div><br>
            <h2>Book your car here</h2><br>
            <p>Looking for a reliable vehicle? Use our easy-to-navigate booking system to reserve your ideal car in just a few clicks. Choose from a wide range of vehicles to suit your needs, from economy to luxury. Book now and get on the road hassle-free!</p><br>
            <a href="booking.php"><button class="btn">Book here</button></a>
        </section>

        <section class="featured-cars">
            <h2>Featured Cars</h2>
            <div class="cars-grid">
                <div class="car">
                    <h3>KIA</h3>
                    <a href="car_details.html"><img src="images/kia.jpg" width="300px" height="200px"></a>
                    <p>KIA offers a perfect blend of style, comfort, and performance.</p>
                </div>
                <div class="car">
                    <h3>Toyota</h3>
                    <a href="car_details.html"><img src="images/toyota.jpg" width="300px" height="200px"></a>
                    <p>Toyota is renowned for its exceptional reliability, fuel efficiency, and innovative safety features.</p>
                </div>
                <div class="car">
                    <h3>Hyundai</h3>
                    <a href="car_details.html"><img src="images/hyundai.jpg" width="300px" height="200px"></a>
                    <p>Hyundai combines modern design, advanced technology, and excellent performance.</p>
                </div>
            </div>
        </section>
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
