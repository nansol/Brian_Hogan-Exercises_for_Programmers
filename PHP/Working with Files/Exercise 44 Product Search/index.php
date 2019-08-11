<?php

// Read JSON file
$json = file_get_contents('./products.json');

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
    <title>Product Search</title>
</head>
<body>
    <header class='container'>
        <h1>Product Search</h1>
    </header>
    
</body>
</html>