<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizza Party</title>
</head>
<body>
    <div class="container">
        <form action="" method='POST'>
        <label for="people">How many people will eat pizza?</label>
        <input type="number" name="people" min="1" required>
        <br>
        <label for="pizza">How many pizzas do you have?</label>
        <input type="number" name="pizza" min="1" required>

        <input type="submit" name="submit">
        </form>
    </div>


    <?php


        if(isset($_POST['submit']) && (isset($_POST['people'])) && (isset($_POST['pizza']))){
            
        $people =  $_POST['people'];
        $pizza = $_POST['pizza'];
        $slices = $pizza * 8;
        $leftover = 0;

        $count = $slices/$people;
        $slicePerPerson = floor($count);
        $leftover = ($count - $slicePerPerson) * 10;

        echo $people. ' people with ' . $pizza . ' pizzas';
        echo '<br>'; 
        
         
       function slice(){
                  
        $people =  $_POST['people'];
        $pizza = $_POST['pizza'];
        $slices = $pizza * 8;
        $count = $slices/$people;
        $slicePerPerson = floor($count);

        if($slicePerPerson == 1){
            return $slice = 'slice';
        } else {
            return $slice =  "slices";
        }}

            
        function leftover()

        {   $people =  $_POST['people'];
            $pizza = $_POST['pizza'];
            $slices = $pizza * 8;
            $leftover = 0;
           
            $count = $slices/$people;
            $slicePerPerson = floor($count);
            $leftover = ($count - $slicePerPerson) * 10; 

            if($leftover <= 1){
                return $slice = 'slice';
            } else {
                return $slice =  "slices";
            }
        }

        echo "Each person gets " . $slicePerPerson . " " .slice() ." of pizza.";

        echo '<br>'; 

        echo "There are ". round($leftover) . " leftover" . " " .  leftover() . ".";
    
    }

    ?>
    

    <!-- Challenges 
    • Create a variant of the program that prompts for the
    number of people and the number of pieces each person
    wants, and calculate how many full pizzas you need to
    purchase.-->

    <form action="" method='POST'>
        <label for="people">How many people will eat pizza?</label>
        <input type="number" name="people" min="1" required>
        <br>
        <label for="slice">How many slices of pizza you want?</label>
        <input type="number" name="slice" min="1" required>

        <input type="submit" name="sub">
    </form>

    <?php
        if(isset($_POST['sub']) && (isset($_POST['people'])) && (isset($_POST['slice']))){
            $people =  $_POST['people'];
            $slice = $_POST['slice'];
            $fullPizza = 8;
            $leftover = 0;
            $pizza = 0;
    
            $count = $slice /  $fullPizza;
            $pizza = ceil($count);

            function pizza() {
            $slice = $_POST['slice'];
            $fullPizza = 8;
            $pizza = 0;
    
            $count = $slice /  $fullPizza;
            $pizza = ceil($count);

            if($pizza <= 1){
            return $pizza = 'pizza';
        } else {
            return $pizza =  "pizzas";
        }          
    }     
        echo "You have to order " . $pizza . " " . pizza();

    }   
    ?> 
</body>
</html>