<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "balram";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    $message = "Connection failed: " . mysqli_connect_error();
    header("Location: index.php?message=" . urlencode($message));
    exit();
}

$message = ''; // Initialize message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $phone = isset($_POST['number']) ? mysqli_real_escape_string($conn, $_POST['number']) : '';

    // Prepare SQL statement
    $sql = "INSERT INTO user (name, email, phone) VALUES ('$name', '$email', '$phone')";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        $message = "Data successfully added!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);

// Redirect back to form with message
header("Location: index.php?message=" . urlencode($message));
exit();

?>
