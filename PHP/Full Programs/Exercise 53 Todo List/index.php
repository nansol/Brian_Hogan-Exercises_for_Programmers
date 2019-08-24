<?php
include "sql.php";
print_r($todo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Todo List</title>
</head>
<body>
    <header>
        <h1>ToDo List</h1>
    </header>
    <form method="POST">
        <input id='input' type="text" name="task" placeholder="Add your task" required>
    </form>
    <ul>
    <?php foreach($todo as $key=>$value) :?>{
        <li> <?php echo $value['task'];?> 
            <button name='update'>Update</button>
            <button name='delete'>Delete</button>
        </li>
    }   
    <?php endforeach; ?>

    </ul>

    <?php

    if(isset($_POST['task']))
        {
            $task = $_POST['task'];
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "INSERT INTO tasks (task)
            VALUES ('$task')";

            if ($conn->query($sql) === TRUE) {
            //echo " New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();

            }
    ?>
    
</body>
</html>