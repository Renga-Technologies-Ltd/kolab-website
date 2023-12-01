<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
//Get from data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$jobposition = isset($_POST['jobposition']) ? $_POST['jobposition'] : '';
$companyname = isset($_POST['companyname']) ? $_POST['companyname'] : '';
$selectservice = isset($_POST['services']) ? $_POST['services'] : '';

echo ('your email is\n');
echo ($email);

require '../phpmailer/vendor/autoload.php';

$mail = new PHPMailer();
//enable smtp debuging (for testing)
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//set up the smtp server
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
    echo 'Message could not be sent.';
} else {
    echo "<script>alert('Your message has been sent successfully!')</script>";
}
