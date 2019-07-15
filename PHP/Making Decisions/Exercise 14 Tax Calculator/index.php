<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Tax Calculator</title>
</head>
<body>
    <header class="container">
        <h1>Tax Calculator</h1>
    </header>
     <div class='container'>
        <form action="" method='POST'>
            <input type="number" name='amount'  step=any  min='1' placeholder='What is the order amount?' required>  
            <br>
            <input type="text" name='state'  step=any  placeholder='What is the state?' required>  
            <br>
            <input type="submit" name='submit'>
            <br>
        </form>
    </div>

    <?php

    if(isset($_POST['submit'])){

        $amount = $_POST['amount'];
        $input = $_POST['state'];
        $state = ucfirst($input);
        $winsconsin = "Wisconsin";
        $tax= 5.5 ;
        $stateTax = (5.5/100) * $amount;
        $total = $amount + $stateTax;


        if($state == "Wi" || $state == $winsconsin){

        echo "The subtotal is $". $amount;
        echo "<br>";
        echo "The tax is $" .$stateTax;
        echo "<br>";
        echo "The total is $" . $total;

        }
        if ($state !== "Wi" &&  $winsconsin !== $state)
        {
            echo "The subtotal is $". $amount;
            echo "<br>";
            echo "The state is " .$state;
            echo "<br>";
            echo "The total is $" . $amount;;
        }
    }
      
    ?>
    
</body>
</html>