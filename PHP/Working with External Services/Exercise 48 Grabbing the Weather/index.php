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

$temCel = $weather['main']['temp'] -273.15;
$description = $weather['weather'][0]['description'];
echo $city." weather today:<br>";
echo $description."<br>";
echo $temCel. " degrees Celcius<br>";


}
 
?>
</body>
</html>