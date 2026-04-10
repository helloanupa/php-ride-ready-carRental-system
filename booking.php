 
<html lang="en">
<head>
      <link rel="stylesheet" href="styles/booking.css">
      <link rel="stylesheet" href="styles/index.css">
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
        <section class="booking-interface">
            <h2>Car rental & booking interface</h2>

            <form action="booking_insert.php" method="post">
                <label for="id">Booking id</label>
                <input type="text" id="id" name="id" disabled><br>

                <label for="name">Name</label>
                <input type="text" id="name" name="name" required><br>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required><br>

                <label for="phone">Phone number</label>
                <input type="tel" id="phone" name="phone" required><br>

                 

                <label for="pickuploca">Pick-up location:</label>
                <input type="text"   id = "pickuploca"  name="pickuploca" required><br>

                <label for="dropoffloca">Drop-off location:</label>
                <input type="text" id="dropoffloca" name="dropoffloca" required><br>

                <label for="pickupdate">Pick-up date:</label>
                <input type="datetime-local" id="pickupdate"  name="pickupdate" required><br>

                <label for="dropoff-datetime">Drop-off Date:</label>
                <input type="datetime-local"   name="dropoffdate" required><br>

                 

                <button type="submit">Book Now!</button>
            </form>
        </section>
    </main>

    
    
</body>
</html>
