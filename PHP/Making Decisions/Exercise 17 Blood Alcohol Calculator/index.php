<?php
    $states = './LegalBloodAlcoholLimitBAC.csv';

    function processCsv($file){

        $csv = fopen($file, 'r');

        //Get the first row column headers
        $headers = fgetcsv($csv);
        //Loop thru of the rest of the file
        while(($row = fgetcsv($csv)) !== false ){
        //Use headers as array keys    
            yield array_combine($headers, $row); //array_combine — Creates an array by using one array for keys and another for its values
        }
        fclose($csv);
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Blood Alcohol Calculator</title>
</head>
<body>
    <header class="container">
        <h1>Blood Alcohol Calculator</h1>
    </header>
     <div class='container'>
        <form action="" method='POST'>
            <input type="number" name='numberOfDrinks' step="any" min='1' placeholder='Enter total alcohol consumed, in ounces (oz)' required>  
            <br>
            <input type="number" name='hours' min='1' placeholder='Enter number of hours since the last drink'required>  
            <br>
            <input type="number" name='weight' step=any  min='1' placeholder='Enter your weight in lb'required>  
            <br>
            <select name="state">
                <?php
                    foreach(processCsv($states) as $key=>$value):
                    echo '<option type= "text" value ='. $value['State'].'>'. $value['State'].'</option>'; 
                    endforeach;
                ?>   
            </select>
            <br>
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="male"> Male
            <br>
            <input type="submit" name='submit'>
            <br>
        </form>
    </div>
    <?php

    if(isset($_POST['submit'])){
        $numberOfDrinks = $_POST['numberOfDrinks'];
        $hours =$_POST['hours'];
        $weight =$_POST['weight'];
        $state = $_POST['state'];
        $gender = $_POST['gender'];
        $female = 0.66;
        $male = 0.73;
        $BAC= 0;


        if(($gender == "female") ){
            $BAC = ($numberOfDrinks * 5.14 / $weight * $female) - .015 * $hours;
           
        }

        
        if(($gender == "male") ){
            $BAC = ($numberOfDrinks * 5.14 / $weight * $male) - .015 * $hours;
           
        }


        foreach(processCsv($states) as $key=>$value){
            if($state == $value['State']){
                if($BAC > $value['BAC']){
                    echo "Your BAC is " .number_format($BAC,1) ."<br>";
                    echo "It is not legal for you to drive in "  .$state;
                }
                else{
                    echo "Your BAC is " .number_format($BAC,1)."<br>";
                    echo "It is legal for you to drive in "  .$state;
                }
            }
        }
    }
?>
    
</body>
</html>