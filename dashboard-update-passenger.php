<?php
session_start();

// Check if employeeID is set in the URL
if (isset($_GET['userID'])) {
    $userID = $_GET['userID'];

    include 'passenger.php'; // Ensure this file connects to the database

    // Fetch employee data based on employeeID
    $sql = "SELECT * FROM user WHERE userID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $employee = $result->fetch_assoc();
    } else {
        // Handle case where employee is not found
        echo "Employee not found.";
        exit;
    }
} else {
    // Handle case where employeeID is not provided
    echo "No employee ID provided.";
    exit;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/passenger-add.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="js/dashboard.js" defer></script>
</head>
<body>

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
                            <li><a href="passenger-list.php">Passenger List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Employee</a>
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
        <main>
            <div class="container">
                <h2>Update Passenger</h2>
                <form action="update-passenger.php" method="POST">
                    <input type="hidden" name="userID" value="<?php echo $userID; ?>">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group">
                        <div class="button-container">
                            <button type="submit" class="submit-btn">Submit</button>
                        </div>
 </div>
                </form>
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