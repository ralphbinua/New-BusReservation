<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/support.css">
    <link rel="stylesheet" href="css/nav.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Contact Us</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="user.php">Home</a></li>
            <li><a href="#">Buy Tickets</a></li>
            <li><a href="#">Track Ticket</a></li>
            <li><a href="enquiry.php">FAQs</a></li>
            <?php if (isset($_SESSION['username'])): ?>
                <li><a href="profile.php"><?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
            <?php else: ?>
                <li><a href="register.php">Sign Up</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <div class="support-contact">
        <form action="contact.php" method="POST">
            <h1>CONTACT US</h1>
            <div class="upper-container">
                <p>
                    We’re eager to hear from you! If you have any questions, feedback, or suggestions, please feel free to share.
                    Simply complete the form below, and we’ll respond promptly.
                </p>
            </div>

            <div class="lower-container">
                <div>
                    <input type="text" id="name" name="name" placeholder="Name" required>
                </div>
                <div>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="contact-message">
                    <textarea id="enquiry-message" name="enquiry-message" placeholder="Message or Inquiry" required></textarea>
                </div>
            </div>

            <div class="button-container">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

    <footer>
        <nav>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="support.php">Support & Contact</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>