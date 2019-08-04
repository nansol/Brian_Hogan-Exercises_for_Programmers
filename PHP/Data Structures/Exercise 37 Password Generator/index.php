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
        $specialCharacters = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
        $special = explode(" ",$specialCharacters);
    
        if(isset($_POST['submit'])){ 
            $length = $_POST['length'];
            $specialChar = $_POST['specialChar'];
            $numb = $_POST['numb'];
            $alphabets = $length-$numb;

            $nRange = $length-($numb*2)-$specialChar;
            $lRange = $length-$numb-$specialChar;

            $n = range(0,9);
            shuffle($n);
            $numbers = array_slice($n,0,$nRange);

            $a = range("a","z");
            shuffle($a);
            $letters = array_slice($a,0,$lRange);

            shuffle($e);
            $s = array_slice($e,0,$nRange);
            print_r($s);
            $word='';


 
                
        }
         
    ?>
</body>
</html>