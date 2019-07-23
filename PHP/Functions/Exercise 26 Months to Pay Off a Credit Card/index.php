<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Months to Pay Off a Credit Card</title>
</head>
<body>
    <header class="container">
        <h1>Months to Pay Off a Credit Card</h1>
    </header>
     <div class='container'>
         <form method='POST'>
            <input type="number" name='balance' min="1" placeholder='What is your balance?'required>  
            <br>
            <input type="number" name='apr' min="1" placeholder='What is the APR on the card (as a percent)?' required>  
            <br>
            <input type="number" name='monthlyPayment' min="1" placeholder='What is the monthly payment you can make?' required>  
            <br>
            <input type="submit" name='submit'>
            <br>
        </form>
    </div>  

    <?php
    
    if(isset($_POST['submit'])){
        function calculateMonthsUntilPaidOff(){
        $balance = $_POST['balance'];
        $apr = $_POST['apr']/100;
        $monthlyPayment = $_POST['monthlyPayment'];
        $i =  $apr/365;

        $pow = pow(1+$i,30);
        $a =1 - $pow;
        $l = log(1+($balance/$monthlyPayment) * $a);
        $log = $l / log(1 + $i);
        $n = -(1/30) * $log;

        echo "Your balance is: " . $balance ."<br>";
        echo "Apr on the card is: " . $_POST['apr']. "%"."<br>";
        echo "You can montly pay: "  ."\$".$monthlyPayment."<br>";
        echo "It will take you " .ceil($n). " months to pay off this card.";

    }

    echo calculateMonthsUntilPaidOff();
}

    ?>

    
</body>
</html>