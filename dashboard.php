<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="js/dashboard.js" defer></script>
</head>
<body>

<?php
include 'db.php'; // Include your database connection

// Query to get the total number of passengers
$sql = "SELECT COUNT(*) as total_passengers FROM user"; // Adjust the table name as necessary
$result = $conn->query($sql);
$total_passengers = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_passengers = $row['total_passengers'];
}

$conn->close(); // Close the database connection
?>

<div class="main">
    <aside class="navigation">
        <div class="top">
            <img src="image/profile.JPG" class="top-img">
            <p class="top-name">Ralph binua</p>
        </div>
        <div class="bottom">
            <div class="content">
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li>
                        <a href="#" class="dropdown-toggle">Ticket Booking</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" onclick="showSection('about')">Ticket List</a></li>
                            <li><a href="#">Refund List</a></li>
                            <li><a href="#">Cancel List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Passenger</a>
                        <ul class="dropdown-menu">
                            <li><a href="passenger/passenger-list.php">Passenger List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle ">Employee</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Employee Type List</a></li>
                            <li><a href="employee-list.php">Employee List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Software Setting</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Vehicle List</a></li>
                            <li><a href="#">Location List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Trip</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Add Trip</a></li>
                            <li><a href="#">Trip List</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    <div class="right">
        <nav class="top-bar">
            <img src="image/profile.JPG" class="nav-img">
        </nav>

        <main>
            <div class="dashboard">
                <div class="total-trip">
                    <div class="trip-info">
                        <span class="total-trip-up">Total Trip</span><br>
                        <span class="total-trip-down">0</span>
                    </div>
                </div>

                <div class="total-ticket">
                    <div class="ticket-info">
                        <span class="total-ticket-up">Total Ticket <br>Booking</span>
                        <span class="total-ticket-down">0</span>
                    </div>
                </div>

                <div class="total-booking">
                    <div class="booking-info">
                        <span class="total-booking-up">Total Booking <br> Amount</span>
                        <span class="total-booking-down">0</span>
                    </div>
                </div>

                <div class="total-passenger">
                    <div class="passenger-info">
                        <span class="total-passenger-up">Total Passenger</span><br>
                        <span class="total-passenger-down"><?php echo $total_passengers; ?></span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<footer>
    <nav class="footer-dashboard">
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="support.php">Support & Contact</a></li>
        </ul>
    </nav>
</footer>
</body>
</html>