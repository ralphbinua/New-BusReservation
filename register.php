<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="">Buy Tickets</a></li>
            <li><a href="">Track Ticket</a></li>
            <li><a href="enquiry.php">FAQs</a></li>
            <?php if (isset($_SESSION['username'])): ?>
                <li><a href="profile.php"><?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
            <?php else: ?>
                <li><a href="register.php">Sign Up</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <main>
        <form action="create.php" method="POST">
            <h1>Register</h1>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
            </div>
            <div class="down-function">
                <button type="submit">Log In</button>
                <p>Already have an account? <a href="login.php" class="have-account">Sign In</a></p>
            </div>
        </form>
    </main>

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