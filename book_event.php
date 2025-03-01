
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and store form data in session
    $_SESSION['booking_data'] = [
        'eventName' => htmlspecialchars($_POST['eventName']),
        'eventType' => htmlspecialchars($_POST['eventType']),
        'eventDate' => htmlspecialchars($_POST['eventDate']),
        'eventHall' => htmlspecialchars($_POST['eventHall']),
        'userName' => htmlspecialchars($_POST['userName']),
        'userEmail' => htmlspecialchars($_POST['userEmail']),
        'additionalMessage' => htmlspecialchars($_POST['additionalMessage'])
    ];
    
    header('Location: confirm.php');
    exit;
} else {
    // Redirect if accessed directly
    header('Location: confirm.php');
    exit;
}
?>