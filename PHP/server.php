<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "balram";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Check if form fields are set
        $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
        $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
        $phone = isset($_POST['number']) ? mysqli_real_escape_string($conn, $_POST['number']) : '';

        // Proceed only if all fields are filled
        if (!empty($name) && !empty($email) && !empty($phone)) {
            // SQL query to insert data into the table
            $sql = "INSERT INTO user (name, email, phone) VALUES ('$name', '$email', '$phone')";

            // Execute the query
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "All fields are required.";
        }
    }

    // Close the connection
    mysqli_close($conn);
}
