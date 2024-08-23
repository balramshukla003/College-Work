<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Input Form</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>


    <?php
    if (isset($_GET['message'])) {
        echo "<script>alert('" . htmlspecialchars($_GET['message']) . "');</script>";
    }
    ?>

    <div>

        <form action="server.php" method="post">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="number">Phone</label>
            <input type="text" id="number" name="number" required>

           <button>Submit</button>

        </form>

    </div>

</body>

</html>
