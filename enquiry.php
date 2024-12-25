<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/enquiry.css">
    <link rel="stylesheet" href="css/nav.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>FAQs</title>

    <!-- Link to the JavaScript file -->
    <script src="js/script.js" defer></script>
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

    <div class="enquiry">
        <h1>Frequently Asked Questions</h1>

        <div class="faq-container">
            <div class="left">
                <div class="faq-item">
                    <h3><i class="fas fa-plus"></i> Booking Ticket</h3>
                    <p>
                        Reserving a ticket is easy and can be done in a few steps:<br><br>
                        1. Enter your departure and destination locations.<br>
                        2. Select your travel date and the number of passengers, including any special accommodations needed.<br>
                        3. Browse available buses, reviewing departure times, bus types, and amenities.<br>
                        4. Fill in the required passenger details and proceed to payment.<br>
                        5. Confirm your reservation by reviewing all details and submitting your payment. You will receive your ticket via email, so check your inbox and spam folder for the confirmation.
                    </p>
                </div>

                <div class="faq-item">
                    <h3><i class="fas fa-plus"></i> Cancel Ticket</h3>
                    <p>
                        To cancel your bus ticket, follow these steps:<br><br>
                        1. Go to "My Bookings" to view your reservations.<br>
                        2. Find the ticket you want to cancel and check the details.<br>
                        3. Click "Cancel" and confirm your decision.<br><br>
                        Review any cancellation terms. You will receive a confirmation email once it's processed.
                    </p>
                </div>

                <div class="faq-item">
                    <h3><i class="fas fa-plus"></i> Payment Methods</h3>
                    <p>
                        We offer flexible payment options to suit our diverse customers, including:<br><br>
                        - **Credit/Debit Cards**: Major cards such as Visa, MasterCard, and American Express are accepted for secure payments.<br>
                        - **Online Payment**: You can also use popular mobile e-wallets for fast and convenient transactions.<br>
                    </p>
                </div>
            </div>

            <div class="right">
                <div class="faq-item">
                    <h3><i class="fas fa-plus"></i> Refund Process</h3>
                    <p>
                        Once your cancellation request is processed, a refund will be initiated automatically. It may take 5 to 7 business days to reflect in your account, depending on your payment method and bank processing times. If you have questions about your refund, please contact our customer support team for assistance.
                    </p>
                </div>

                <div class="faq-item">
                    <h3><i class="fas fa-plus"></i> Modify Ticket</h3>
                    <p>
                        To modify your reservation, follow these steps:<br><br>
                        1. **Access Your Bookings**: Go to the "My Bookings" section to view your current reservations and select the one to modify.<br>
                        2. **Make Your Changes**: Adjust your travel date, number of passengers, or passenger details.<br>
                        3. **Confirm Changes**: Review the updated details and confirm. A confirmation email will be sent to you with the modifications.<br>
                        If you have any questions or issues, our customer support team is here to help ensure a smooth travel experience.
                    </p>
                </div>
            </div>
        </div>
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