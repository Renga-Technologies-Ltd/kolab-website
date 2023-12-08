<?php
// subscribe.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize email address
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if ($email) {
        file_put_contents('subscribers.txt', $email . PHP_EOL, FILE_APPEND);

        // Redirect to a success page
        header('Location: success.php');
        exit;
    } else {
        // Redirect to an error page or display an error message
        header('Location: error.php');
        exit;
    }
}
?>
