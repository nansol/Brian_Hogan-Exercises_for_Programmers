<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Filtering Values</title>
</head>
<body>
    <header class="container">
        <h1>Filtering Values</h1>
    </header>
    <?php
        for($i = 0; $i <= 100; $i++){
            if($i % 2 == 0){
                //echo $i.'<br>';
                $array[]=$i;
            }
           
        }
        echo var_dump($array);
    ?>
</body>
</html>