<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Computing Simple Interest</title>
</head>
<body>
    <header class="container">
        <h1>Computing Simple Interest</h1>
    </header>
     <div class='container'>
        <form action="" method='POST'>
            <input type="number" name='principal'  step=any  min='1' placeholder='Enter the principal' required>  
            <br>
            <input type="number" name='rate'  step=any  placeholder='Enter the rate of interest' required>  
            <br>
            <input type="number" name='years'  step=any  placeholder='Enter the number of years' required>  
            <br>
            <input type="submit" name='submit'>
        </form>
    </div>

    <?php

    if (isset ($_POST['submit'])){

        $principal = $_POST['principal'];
        $rate = $_POST['rate'] ;
        $years = $_POST['years'];


        $interest = $principal * (1 + (($rate / 100) * $years));

        echo "Enter the principal: " . $principal;
        echo "<br>";
        echo "Enter the rate of interest: " . $rate;
        echo "<br>";
        echo "Enter the number of years: " . $years;

        echo "<br>";
        echo "After " .$years . " years at " .$rate . "%, the investment will be worth $". $interest . ".";


    }
    ?>

    
</body>
</html>