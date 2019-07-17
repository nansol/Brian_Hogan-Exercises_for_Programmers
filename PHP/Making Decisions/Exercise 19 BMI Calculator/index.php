<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>BMI Calculator</title>
</head>
<body>
    <header class="container">
        <h1>BMI Calculator</h1>
    </header>
     <div class='container'>
         <form method='POST'>
            <label for="">Enter your height</label>
            <input type="number" name='fm' value step=any min="1" placeholder='feet or meter'required>  
            <input type="number" name='icm' step=any min="1" placeholder='inches or cm' required>  
            <br>
            <label for="">Enter your weight</label>
            <input type="number" name='weight' step=any min="1" placeholder='weight'required>  
            <br>
            <input type="radio" name="unit" value="imperial"> Imperial
            <input type="radio" name="unit" value="metric"> Metric    
            <br>    
            <input type="submit" name='submit'>
            <br>
        </form>

        <?php

if(isset($_POST['submit'])){
    $unit = $_POST['unit'];
    $fm = $_POST['fm'];
    $icm = $_POST['icm'];
    $weight = $_POST['weight'];
    $inches = $fm *12 + $icm;
    $cm = $fm * 100 + $icm;
 
    if($unit == 'imperial'){
        $bmi = ($weight / ($inches * $inches)) * 703;
    } 

    
    if($unit == 'metric'){
       $bmi = ($weight / $cm / $cm) * 10000;
    } 

    echo  number_format( $bmi,1) ."<br>";

    if(number_format( $bmi,1) <= 18.5){
        echo "You are underweight";
    }
    elseif(number_format( $bmi,1) >= 18.5 && number_format( $bmi,1) <= 24.9){
        echo "You have normal or healthy weight";
    }

    elseif(number_format( $bmi,1) >= 25 && number_format( $bmi,1) <= 29.9){
        echo "You are overweight";
    }

    elseif(number_format( $bmi,1) >= 30){
        echo "You are obese";
    }
}


?>



    
</body>
</html>