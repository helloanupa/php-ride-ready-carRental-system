
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Booking</title>
    <link rel="stylesheet" href="style/main_booking.css">  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<div class="container">
    <h2>Car Rental Booking</h2>
    <form id="bookingForm" action="config.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>

        <label for="pickupLocation">Pick-up Location:</label>
        <input type="text" id="pickupLocation" name="pickup_location" placeholder="Enter pick-up location" required>

        <label for="dropoffLocation">Drop-off Location:</label>
        <input type="text" id="dropoffLocation" name="dropoff_location" placeholder="Enter drop-off location" required>

        <label for="pickupDate">Pick-up Date/Time:</label>
        <input type="datetime-local" id="pickupDate" name="pickup_date" required>

        <label for="dropoffDate">Drop-off Date/Time:</label>
        <input type="datetime-local" id="dropoffDate" name="dropoff_date" required>

        <input type="submit" value="Book Now" onclick="showBookingSuccess(event)">
    </form>
</div>

<script>
         
        function showBookingSuccess(event) {
            event.preventDefault();  

             
            Swal.fire({
                title: 'Booking Successful!',
                text: 'Your booking has been confirmed.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                     
                    document.getElementById("bookingForm").submit();
                }
            });
        }
    </script>
</body>
</html>
