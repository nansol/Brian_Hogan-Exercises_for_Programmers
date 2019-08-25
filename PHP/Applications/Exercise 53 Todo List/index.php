<?php
    include "sql.php";

    $conn = mysqli_connect ($servername, $username, $password,$dbname);
    // Check connection
    if (mysqli_connect_errno()) {
        echo 'Failed to connect to MySql '. mysqli_connect_errno();
    } 

    $query = 'SELECT * FROM tasks ORDER BY id ASC';
    $result = mysqli_query($conn, $query);

    $taskList = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <title>Todo List</title>
</head>
<body >
    <div class='container'>
        <header class='row'>
            <h1 class='col'>Todo List</h1>
        </header>
    </div>
    <div class='container'>
        <div class='row'>
            <div class='col'>
            <form method="POST">
                <input type="text" name="task" placeholder='Add your task' required>
            </form>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <ul>
                    <?php foreach($taskList as $key=>$value):?>  
                        <li> <?php echo $value['task'];?> </li>
                </ul>
            </div>
            <div class='col'>
                <form method="GET">
                    <button name=".$value['id']." id='delete'>Delete</button>
                </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <?php



    if(isset($_POST['task'])){
        $task = $_POST['task'];
        
        $conn = new mysqli($servername, $username, $password,$dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            $sql = "INSERT INTO tasks (task)
                    VALUES ('$task')";
        
           /*  if ($conn->query($sql) === TRUE) {
                echo $task." created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            } */
            
            $conn->close();
    }

    foreach($taskList as $key=>$value){
        if(isset($_GET['$value[id]'])){
            $id = $_GET['$value[id]'];
            if($value['id'] == $id ){
                $sql = "DELETE FROM tasks WHERE id=$id";
            }
        }
    }
    ?>

    
</body>
</html>