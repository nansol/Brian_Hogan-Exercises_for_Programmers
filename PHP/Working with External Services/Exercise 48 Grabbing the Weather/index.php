<?php
require "api.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Grabbing the Weather</title>
</head>
<body>
    <header>
        <h1>Weather</h1>
    </header>
    <form method="GET">
        <input type="text" name='city' placeholder='Add City Name' required>
    </form>

    <?php
        if(isset($_GET['city'])){
        $city = $_GET['city'];

        $weatherJson = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$city."&appid=".$apiKey);
        $weather = json_decode($weatherJson, true);

      //  print_r($weather);    

        $temCel = $weather['main']['temp'] -273.15;
        $description = $weather['weather'][0]['description'];
        $humidity = $weather['main']['humidity']." %";
        $timezone = $weather['timezone'];

        $sunrise = $weather['sys']['sunrise'] +($timezone) ;
        $sunset = $weather['sys']['sunset']+($timezone) ;



       
        echo "<h2>".$city." weather today:</h2>";
        echo "<p>".$temCel. " &deg;C<br> 
                   Sunrise at ".gmdate ("H-i", $sunrise)."<br>
                   Sunset at ".gmdate ("H-i", $sunset).        
             "</p>";
        echo "<small> Description: ".$description."</small><br>";
        echo "<small> Humidity: ".$humidity."</small><br>";

    }
    ?>

</body>
</html>