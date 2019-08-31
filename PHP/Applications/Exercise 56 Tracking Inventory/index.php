<?php
include "sql.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySql '. mysqli_connect_errno();
} 
$query = 'SELECT * FROM inventory';
$result = mysqli_query($conn, $query);

$invetory = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

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
        <input type="text" name='serialNum'placeholder="Serial Number" required>
        <br>
        <input type="text" min='1' name='value' placeholder="Value" required>
        <br>
        <label for="image">Inventory Image</label>
        <input type="file" name='image'>
        <br>
        <input type="submit" name='submit'>
    </form>
        <div class='container'> 
            <table>
                <tr>
                    <th>Name</th>
                    <th>Serial Number</th> 
                    <th>Value</th>
                </tr>
                <?php foreach($invetory as $key=>$value):?>
                <tr>
                    <td><?php echo $value['name']?></td>
                    <td><?php echo $value['serialNumber']?></td> 
                    <td><?php echo $value['value']?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $serialNumber = $_POST['serialNum'];
        $image = $_POST['image'];
        $value = $_POST['value'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "INSERT INTO inventory (name, serialNumber, value, image)
        VALUES ('$name', '$serialNumber', '$value','$image')";

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