<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', 'rootroot','sortingrecords');
// Check connection
if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySql '. mysqli_connect_errno();
} 

$query = 'SELECT * FROM employees ORDER BY lastName ASC';
$result = mysqli_query($conn, $query);

$list = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

array_multisort($list[1],SORT_ASC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Filtering Records</title>
</head>
<body>
    <header class='container'>
        <h1>Filtering Records</h1>
    </header>
    <form method="GET"> 
        <input type="text" name="input" placeholder="Add Name/Last Name, Position" required>
    </form>

        
    <table>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Separation date</th>
    </tr>
    <?php
        if(isset($_GET['input'])){
            $input = $_GET['input'];
            $length = strlen($input);

            foreach($list as $key=>$value)
            {                    
              if($input == strtolower(substr($value['name'], 0 ,$length))|| $input == strtolower(substr($value['lastName'], 0 ,$length))|| $input == strtolower(substr($value['position'], 0 ,$length)))
                {
                echo "<tr id='output'> ";
                    echo "<td>".$value['name']." ".$value['lastName']."</td>"; 
                    echo "<td>".$value['position']."</td>"; 
                    echo "<td>".$value['separationDate']."</td>"; 
                    }
                echo "</tr>";
                }
              
            }

        
    ?>
    </table>
</body>
</html>