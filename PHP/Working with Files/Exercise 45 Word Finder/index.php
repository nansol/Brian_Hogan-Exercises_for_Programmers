<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Word Finder</title>
</head>
<body>
    <header class='container'>
        <h1>Word finder</h1>
    </header>
    <?php
    $string = 'One should never utilize the word "utilize" in
    writing. Use "use" instead';

    echo $string;

    $newString = str_replace('utilize', 'use', $string);
 

    echo "<br>";

    echo $newString;

    ?>
    
</body>
</html>