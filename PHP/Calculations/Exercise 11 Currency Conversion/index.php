<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Currency Conversion</title>
</head>
<body>
    <header class="container">
        <h1>Currency Conversion</h1>
    </header>
    <div class='container'>
        <form action="" method='POST'>
            <input type="number" name='from'  step=any  min='1' placeholder='How many euros are you exchanging?' required>  
            <input type="number" name='rate'  step=any  placeholder='What is the exchange rate?' required>  
            <input type="submit" name='submit'>
        </form>
    </div>

    <?php
        if(isset($_POST['submit'])){
            $from = $_POST['from'];
            $rate = $_POST['rate'];
            $to = 0;
            $to =   ($from * $rate);
            
            echo "How many euros are you exchanging?: " . $from;
            echo "<br>";
            echo "What is the exchange rate?: " . $rate;
            echo "<br>";            
            echo number_format($from,2) .' euros at an exchange rate of ' . number_format($rate, 2). ' is ' . number_format($to, 2) . ' U.S. dollars';
        }
    ?>

    
</body>
</html>