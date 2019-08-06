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
    $specialChar = ['!', '@', '&','(',')','[',']','<','>',',','.','?','/','-','$','~',];

            if(isset($_POST['submit'])){ 
            $length = $_POST['length'];
            $numberOfSpecialChar = $_POST['specialChar'];
            $numberOfNumbers = $_POST['numb'];

            $lengthRange = $length-$numberOfNumbers-$numberOfSpecialChar;

            $numberRange = range(0,9);
            shuffle($numberRange);
            $numberRange = array_slice($numberRange,0,$numberOfNumbers);
            $numbersString = implode($numberRange);
            echo "There is " .strlen($numbersString).' of number<br>';

            $alphabetRange = range("a","z");
            shuffle($alphabetRange);
            $letters = array_slice($alphabetRange,0,$lengthRange);
            $lettersString = implode($letters);
            echo "There is " .strlen($lettersString).' of letters<br>';

            shuffle($specialChar);
            $s = array_slice($specialChar,0,$numberOfSpecialChar);
            $specialString = implode($s);
            echo "There is " .strlen($specialString).' of special Characters<br>';

            $psw = $lettersString.$numbersString.htmlentities($specialString);
            
            echo str_shuffle($psw);
            echo "<br>";
            echo strlen($psw);    
                
        }  
         
    ?>
</body>
</html>