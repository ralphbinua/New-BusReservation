<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/login.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Log In</title>
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
        <form action="account_login.php" method="POST">
                <h1>Log In</h1>

                <div class="up-funtion">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>

                    <div class="remember-forgot">

                        <div class="remember-left">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember Me</label>
                        </div>

                        <div class="forgot-right">
                            <a href="" class="forgot-password">Forgot Password?</a>
                        </div>
                    </div>
                </div>

            <div class="down-function">
                <button type="submit">Log In</button>
                <p>Continue with</p>
                <div class="icons">
                    <a href=""><i class="fa-brands fa-square-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-google"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <p>Don’t have an account? <a href="register.php" class="have-account">Sign Up</a></p>
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