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
        }
         
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

        echo "There are ". $leftover . " leftover" . " " .  leftover() . ".";
    


    ?>
    
</body>
</html>