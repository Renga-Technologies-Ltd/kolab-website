<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../phpmailer/vendor/autoload.php';

// Get form data
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)  : '';
$phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
$jobposition = isset($_POST['jobposition']) ? $_POST['jobposition'] : '';
$companyname = isset($_POST['companyname'] ) ? htmlspecialchars($_POST['companyname']): '';
$selectservice = isset($_POST['services']) ? $_POST['services'] : '';

$mail = new PHPMailer();

// Enable SMTP debugging (for testing)
//$mail->SMTPDebug = 1;

// Set up the SMTP server
$mail->isSMTP();
$mail->Host = 'mail.kolab.ae';
$mail->Port = 465;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->SMTPAuth = true;
$mail->Username = "noreply@kolab.ae";
$mail->Password = "noreply@123";
$mail->setFrom("noreply@kolab.ae", "Kolab");
$mail->addAddress($email, $name);
$mail->Subject = "Message From Kolab Website";
$mail->Body = 'Thank you for showing interest in our products, we will contact you to schedule a demo';
$mail->send();

// Send the mail 
if (!$mail->send()) {
    // Failure
    echo 'Message could not be sent'. $mail->ErrorInfo;
    echo "<script>alert('Message could not be sent.!')</script>";
} else {
    // Success
    echo "<script>alert('Your message has been sent successfully!')</script>";
}

// Redirect regardless of success or failure
header("Location: ../index.php");
exit; // Ensure that no more code is executed after the redirect
?>
