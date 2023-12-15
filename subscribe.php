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
    echo "New record created successfully";

    // Redirect to index.php after a short delay 
    echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 1000);</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
