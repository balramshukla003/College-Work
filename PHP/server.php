<?php

$servername = "localhost"; 
$port = 3306; 
$username = "root"; 
$password = "";
$dbname = "balram"; 


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
// Include the database connection code
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $sql = "INSERT INTO user (Name, Email, Phone) VALUES ('$name', '$email', '$number)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>