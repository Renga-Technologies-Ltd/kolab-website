<?php
// Assuming $email contains the email address to be inserted
$email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : '';

// Establish a database connection (replace these with your actual credentials)
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "subscribers";

// Correctly create a new mysqli object for the connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement to insert data into the 'subscribers' table
$sql = "INSERT INTO subscribers (Email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    $message = "Thank you! You have successfully subscribed to our newsletter.";
} else {
    $message = "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .popup-card {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #f8f8f8;
            border: 1px solid #ccc;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .thank-you-message {
            color: #713998;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="popup-card">
    <p class="thank-you-message"><?php echo $message; ?></p>
</div>
<script>
    // Redirect to index.php after a short delay 
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 2000);
</script>

</body>
</html>
