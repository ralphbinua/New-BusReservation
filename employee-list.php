<?php
include 'employee.php'; // Ensure this file connects to the database and fetches the employee data

// Assuming employee.php fetches the employee data and assigns it to $result
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/employee-list.css">

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
            <div class="container">
                <h1>Employee List</h1>
                <div class="button-container">
                    <a href="employee-add.php" class="add-employee-button">Add Employee</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
 <tbody>
                        <?php
                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)): ?>
                                <tr>
                                    <td><?php echo $row['employeeID']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['employeeType']; ?></td>
                                    <td class="action-buttons">
                                        <a href="dashboard-update-employee.php?employeeID=<?php echo $row['employeeID']; ?>" class="edit"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="delete-employee.php?id=<?php echo $row['employeeID']; ?>" class="delete" onclick="return confirm('Are you sure you want to delete this user?');"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile;
                        } else {
                            echo "<tr><td colspan='5'>No Employee found.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
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