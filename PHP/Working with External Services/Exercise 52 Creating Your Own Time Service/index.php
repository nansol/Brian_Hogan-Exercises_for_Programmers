<?php
   $quotes =file_get_contents('./quotes.json');
   $quotes = json_decode($quotes,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Creating Your Own Time Service</title>
</head>
<body>
    <header>
        <h1>Creating Your Own Time Service</h1>
    </header>
    <?php
    date_default_timezone_set("Europe/Prague");

    $date = ["currentTime" => date("Y-m-d H:i:s")];
    $json = json_encode($date,true);

    echo "<p>The current time is ".date("H:i:s") ." (UTC+01:00) ".date("d-F-Y")."</p>";

    shuffle($quotes);
    $quotesOftheDay = array_shift($quotes);
    foreach($quotesOftheDay as $key=>$value){
        echo "<h4>$value</h4>";
    }

    ?>
    
</body>
</html>