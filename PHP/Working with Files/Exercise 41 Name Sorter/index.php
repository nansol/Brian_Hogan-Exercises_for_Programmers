<?php 
    $list = './Names.csv';
    $e = array_map('str_getcsv', file($list));

    array_multisort($list[1],SORT_ASC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Name Sorter</title>
</head>
<body>
    <header class='container'>
        <h1>Name Sorter</h1>
    </header>
g</body>
</html>