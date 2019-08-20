<?php
// Read JSON file
$json = file_get_contents('http://api.open-notify.org/astros.json');

//Decode JSON
$json_data = json_decode($json,true);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Who’s in Space?</title>
</head>
<body>
    <header class='container'>
        <h1>Who’s in Space?</h1>
    </header>
    <?php
    echo "There are ";
    echo $json_data["number"];
    echo " people in space right now:"
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Craft</th> 
        </tr>
    <?php foreach($json_data['people'] as $key=>$value): ?>
        <tr>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['craft']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>