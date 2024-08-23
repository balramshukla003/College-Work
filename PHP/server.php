<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "balram";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $phone = isset($_POST['number']) ? mysqli_real_escape_string($conn, $_POST['number']) : '';

    
    if (!empty($name) && !empty($email) && !empty($phone)) {
        
        $sql = "INSERT INTO user (name, email, phone) VALUES ('$name', '$email', '$phone')";

        
        if (mysqli_query($conn, $sql)) {

            echo "New record created successfully";

        } else {

            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    } else {

        echo "All fields are required.";

    }
}


mysqli_close($conn);
?>
