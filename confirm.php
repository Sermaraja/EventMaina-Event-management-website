<?php
session_start();

// Redirect to booking page if no booking data
if (!isset($_SESSION['booking_data'])) {
    header('Location: index.php#book');
    exit;
}

$data = $_SESSION['booking_data'];
unset($_SESSION['booking_data']); // Clear the booking data after display
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="confirm.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <center>
<div class="laptop">
  <div class="screen">
    <div class="header"></div>
    <div class="text">Thank you  </div>
  </div>
  <div class="keyboard"></div>
</div>
</center>

    <section class="confirmation-section">
        <div class="confirmation-container">
            <h2>🎉 Booking Confirmed!</h2>
            <div class="confirmation-details">
                <p><strong>Event Name:</strong> <?= $data['eventName'] ?></p>
                <p><strong>Event Type:</strong> <?= $data['eventType'] ?></p>
                <p><strong>Date:</strong> <?= date('F j, Y', strtotime($data['eventDate'])) ?></p>
                <p><strong>Venue:</strong> <?= $data['eventHall'] ?></p>
                <p><strong>Booked By:</strong> <?= $data['userName'] ?> (<?= $data['userEmail'] ?>)</p>
                <?php if (!empty($data['additionalMessage'])): ?>
                    <p><strong>Special Requests:</strong><br><?= nl2br($data['additionalMessage']) ?></p>
                <?php endif; ?>
            </div>
            
            <div class="confirmation-actions">
                <p>We've sent a confirmation email to <?= $data['userEmail'] ?>.</p>
                <a href="event.php" class="btn">Make Another Booking</a>
            </div>
        </div>
    </section>

    <footer>
        <!-- Your existing footer content -->
    </footer>
</body>
</html>