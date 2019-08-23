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

  //The current time is 15:06:26 UTC January 4 2050.
   echo "The current time is ".date("H:i:s") ." (UTC+01:00) ".date("d-F-Y");




    ?>
    
</body>
</html>