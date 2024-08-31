<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $degree = htmlspecialchars($_POST['degree']);
    $institution = htmlspecialchars($_POST['institution']);
    $gradYear = htmlspecialchars($_POST['gradYear']);
    $company = htmlspecialchars($_POST['company']);
    $position = htmlspecialchars($_POST['position']);
    $startDate = htmlspecialchars($_POST['startDate']);
    $endDate = htmlspecialchars($_POST['endDate']);
    $responsibilities = htmlspecialchars($_POST['responsibilities']);
    $skills = htmlspecialchars($_POST['skills']);
    $certifications = htmlspecialchars($_POST['certifications']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">


    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .resume-container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2, h3 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }
        p, li {
            margin: 5px 0;
        }

    </style>
    
</head>
<body>
    <div class="resume-container">

        <h2><?php echo $fullName; ?></h2>
        <p>Email: <?php echo $email; ?></p>
        <p>Phone: <?php echo $phone; ?></p>
        <p>Address: <?php echo $address; ?></p>

        <h3>Education</h3>
        <p>Degree: <?php echo $degree; ?></p>
        <p>Institution: <?php echo $institution; ?></p>
        <p>Year of Graduation: <?php echo $gradYear; ?></p>

        <h3>Work Experience</h3>
        <p>Company: <?php echo $company; ?></p>
        <p>Position: <?php echo $position; ?></p>
        <p>Start Date: <?php echo $startDate; ?></p>
        <p>End Date: <?php echo $endDate ? $endDate : 'Present'; ?></p>
        <p>Responsibilities:</p>
        <p><?php echo nl2br($responsibilities); ?></p>

        <h3>Skills</h3>
        <p><?php echo nl2br($skills); ?></p>

        <h3>Certifications</h3>
        <p><?php echo nl2br($certifications); ?></p>
    </div>
</body>
</html>
