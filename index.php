<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/nav.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Home</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
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

        <main>
            <div class="container">
                <h1>Buy Your Ticket Online</h1>
                <h3>Reserve Now, Pay Later</h3>
                <button class="btn">Get Ticket Now</button>
            </div>
        </main>

        <section class="destination">
            <h1>One Way Trip Destination</h1>
        </section>


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