<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Word Frequency Finder</title>
</head>
<body>
    <header class='container'>
        <h1>Word Frequency Finder</h1> 
    </header>
    <?php
   
    $w = file_get_contents('words.txt');
    $array = explode(" ", $w);
    $string = implode(",", $array);



    $count = (array_count_values($array));  


    foreach($count as $key=>$value ){
    $star = str_repeat("*", $value);

     echo $key.':'.' '.$star."<br>";
    }


    ?>
    
</body>
</html>