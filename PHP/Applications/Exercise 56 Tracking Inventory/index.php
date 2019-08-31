<?php
require "sql.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Tracking Inventory</title>
</head>
    <header>
        <h1>Tracking Inventory</h1>
    </header>
<body>
    <form method="POST">
        <input type="text" name='name' placeholder="Name" required>
        <br>
        <input type="text" placeholder="Serial Number" required>
        <br>
        <input type="number" min='0.1' name='value' placeholder="Value" required>
        <br>
        <label for="image">Inventory Image</label>
        <input type="file" name='image'>
        <br>
        <input type="submit" name='submit'>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $number = $_POST['number'];
        $image = $_POST['image'];
        $value = $_POST['value'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "INSERT INTO inventory (name, number, value, image)
        VALUES ('$name', '$number', '$value','$image')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    }
    ?>
</body>
</html>