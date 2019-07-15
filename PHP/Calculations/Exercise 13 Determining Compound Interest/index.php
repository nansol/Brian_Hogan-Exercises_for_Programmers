<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Determining Compound Interest</title>
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
            <input type="number" name='compounded'  step=any  placeholder='Enter the number of times the interest is compounded per year' required>  
            <br>
            <input type="submit" name='submit'>
            <br>
        </form>
    </div>

    <?php    
        if (isset ($_POST['submit'])){

        $principal = $_POST['principal'];
        $rate = $_POST['rate'] ;
        $years = $_POST['years'];
        $compounded = $_POST['compounded'];



        $rn = 1 + (($rate /100) / $compounded);
        $nt = $compounded*$years;   
        $rnnt = pow($rn, $nt);
        $interest = $principal * $rnnt;

        echo "<br>";
        echo "Enter the principal: " . $principal;
        echo "<br>";
        echo "Enter the rate of interest: " . $rate;
        echo "<br>";
        echo "Enter the number of years: " . $years;
        echo "<br>";
        echo "Enter the number of times the interest compounded per year: " . $compounded;
        echo "<br>";

        echo "$".$principal . " invested at " .$rate . " % for " . $years ." years compounded " . $compounded . " times per year is $" .number_format($interest,2);
       } 
    ?>

    <!-- Challenges
    Create a version of the program that works in reverse,
    so you can determine the initial amount you’d need to
    invest to reach a specific goal
     -->
     <div class='container'>
        <form action="" method='POST'>
            <input type="number" name='interest'  step=any  min='1' placeholder='Enter the interest' required>  
            <br>
            <input type="number" name='rate'  step=any  placeholder='Enter the rate of interest' required>  
            <br>
            <input type="number" name='years'  step=any  placeholder='Enter the number of years' required>  
            <br>
            <input type="number" name='compounded'  step=any  placeholder='Enter the number of times the interest is compounded per year' required>  
            <br>
            <input type="submit" name='sub'>
            <br>
        </form>
    </div>

    <?php
    if (isset ($_POST['sub'])){
        $interest = $_POST['interest'];
        $rate = $_POST['rate'] ;
        $years = $_POST['years'];
        $compounded = $_POST['compounded'];

        $rn = 1 + (($rate /100) / $compounded);
        $nt = $compounded * $years;   
        $rnnt = pow($rn, $nt);
        $p = $interest / $rnnt;

        echo "<br>";
        echo "Enter the principal: " . $interest;
        echo "<br>";
        echo "Enter the rate of interest: " . $rate;
        echo "<br>";
        echo "Enter the number of years: " . $years;
        echo "<br>";
        echo "Enter the number of times the interest compounded per year: " . $compounded;
        echo "<br>";

        echo "The initial amount you’d need to invest is $".number_format($p,2);
    }



    ?>

</body>
</html>