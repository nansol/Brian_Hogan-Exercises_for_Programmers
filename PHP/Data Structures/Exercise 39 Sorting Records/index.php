<?php
require 'sql.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Sorting Records</title>
</head>
<body>
    <header class='container'>
        <h1>Sorting Records</h1>
    </header>
<table>
  <tr>
    <th>Name</th>
    <th>Position</th>
    <th>Separation date</th>
  </tr>
    <?php
        foreach($list as $key=>$value){
    echo "<tr>";
        echo "<td>".$value['name']." ".$value['lastName']."</td>"; 
        echo "<td>".$value['position']."</td>"; 
        echo "<td>".$value['separationDate']."</td>"; 
        }
    echo "</tr>";
    ?>
</table>

</body>
</html>