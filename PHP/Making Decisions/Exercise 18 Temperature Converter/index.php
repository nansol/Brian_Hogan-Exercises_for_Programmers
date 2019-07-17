<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Temperature Converter</title>
</head>
<body>
    <header class="container">
        <h1>Temperature Converter</h1>
    </header>
     <div class='container'>
         <form method='POST'>
            <input type="number" name='temperature' step=any placeholder='Enter the temperature'required>  
            <br>
            <input type="radio" name="unit" value="fahrenheit"> Fahrenheit
            <input type="radio" name="unit" value="celsius"> Celsius    
            <br>    
            <input type="submit" name='submit'>
            <br>
        </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $unit = $_POST['unit'];
        $temperature = $_POST['temperature'];
        $fahrenheit = 0;
        $celsius = 0;
    
        if($unit == 'fahrenheit'){
            $celsius = ($temperature - 32) * 5/9;
            echo "The temperature is " . number_format($celsius,0) . "&#8451";
        }
    
        if($unit == 'celsius'){
            $fahrenheit = ($temperature - 32) * 5/9;
            echo "The temperature is " . number_format($fahrenheit,0) . "&#8457";
        }
    }

    ?>
    
</body>
</html>