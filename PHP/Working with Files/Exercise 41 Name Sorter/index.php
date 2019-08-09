<?php 
    $list = './Names.csv';
    $e = array_map('str_getcsv', file($list));

    array_multisort($e);
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

    <?php
    $file = 'names.txt';

    echo "Total of ". count($e). " names <br>";

    foreach($e as $key=>$value){
        echo $value[0].", ".$value[1].'<br>';


    }

    file_put_contents('names.txt', var_export($e, TRUE));

    ?>

</body>
</html>