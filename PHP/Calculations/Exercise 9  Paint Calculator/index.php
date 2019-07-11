<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Paint Calculator</title>
</head>
<body>
    <div class='container'>
        <header>
            <h1 class='header'>Paint Calculator</h1>
        </header>
    </div>
    <div class='container'>
    <h2>Rectangle Area</h2>
    <form  method='POST'>
        <input type="number" min='0' name='length' placeholder='Lenght in feets' id='length'required>
        <input type="number" min='0' name='width' placeholder='Width in feets' id='width' required>
        <br>
        <input type="submit" name='submit'>              
    </form>

    <?php

        if(isset($_POST['submit']) && isset($_POST['lenght']) && isset($_POST['width'])){

        $lenght = $_POST['length'];
        $width = $_POST['width'];
        $gallon = 350;
        $leftover = 0;
        $color = 0;
        $area = $lenght * $width;
          

        if($area <= $gallon){
            $leftover = $gallon - $area;
            echo "You need to buy " .$gallon . ' gallons of color '. $leftover . " of gallons remain" ;
        }
        else {
            $color = $area / $gallon;
            $colorToBuy = ceil($color);
            echo "You need to buy " .$colorToBuy . "gallons of color.";
        }


        }
    
    ?>

    <h2>Circle Area</h2>
    <form  method='POST'>
        <input type="number" min='0' name='radius' placeholder='Radius in feets' id='radius'>

        <input type="submit" name='submit'>              
    </form>

    <?php
     if(isset($_POST['submit']) && isset($_POST['radius'])){
        $gallon = 350;
        $pi = 3.14159;
        $r = $_POST['radius'];
    
        
            $area = ($r * $r) * $pi;
            $color = $area / $gallon;
            $colorToBuy = ceil($color);
            echo "You need to buy " . $colorToBuy . " gallons of color.";

     }



    ?>
    </div>
</body>
</html>