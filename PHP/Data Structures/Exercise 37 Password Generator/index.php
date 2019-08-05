<?php 
    $list = './SpecialChar.csv';
    $e = array_map('str_getcsv', file($list));
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Password Generator</title>
</head>
<body>
    <header class="container">
        <h1>Password Generator</h1>
    </header>
    <div class='container'>
        <form method="POST">
            <input type="number" name='length' step='1' placeholder='What is the minimum length?'required>       
            <br>
            <input type="number" name='specialChar' step='1' placeholder='How many special characters?'required>       
            <br>
            <input type="number" name='numb' step='1' placeholder='How many numbers?'required>       
            <br>
            <input type="submit" name='submit'>
        </form>
    </div>

    <?php
    $special = ['!', '@', '%', '&','*', '(',')','[',']','<','>',',','.','?','/','-','$','%','~','+'];

            if(isset($_POST['submit'])){ 
            $length = $_POST['length'];
            $specialChar = $_POST['specialChar'];
            $numb = $_POST['numb'];

            $lRange = $length-$numb-$specialChar;

            $n = range(0,9);
            shuffle($n);
            $numbers = array_slice($n,0,$numb);
            $numbersString = implode($numbers);

            $a = range("a","z");
            shuffle($a);
            $letters = array_slice($a,0,$lRange);
            $lettersString = implode($letters);
              
            shuffle($special);
            $s = array_slice($special,0,$specialChar);
            $specialString = implode($s);

            $psw = $lettersString.$numbersString.htmlentities($specialString);
            
            echo str_shuffle($psw);
                
        }  
         
    ?>
</body>
</html>