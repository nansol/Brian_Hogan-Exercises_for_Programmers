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
 <!--    <div class='container'>
        <form action="" method='POST'>
            <input type="number" name='from'  step=any  min='1' placeholder='How many euros are you exchanging?' required>  
            <input type="number" name='rate'  step=any  placeholder='What is the exchange rate?' required>  
            <input type="submit" name='submit'>
        </form>
    </div> -->


<!--     <?php
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
    ?> -->





    <!-- Challenges 
    • Build a dictionary of conversion rates and prompt for the countries instead of the rates.
    • Wire up your application to an external API that provides the current exchange rates
    -->



    <?php
    $rateFrom = ['Euro' => 25.62, 'USD' => 22.74, 'GBP' => 28.50, 'AUS' => 15.90, 'CHN' => 3.30];
    ?>

    <div class='container'>
        <form action="" method='POST'>
            <input type="number" name='from'  step=any  min='1' placeholder='How many euros are you exchanging?' required>  
            
            <input type="hidden" id="currency_name" name="currency_name">

            <!-- create a input hidden field. on change the value, get the select option currency name and add into 'currency_name' field.-->
            <select name="rate" onChange="document.getElementById('currency_name').value = this.options[this.options.selectedIndex].text;">

            <?php
            foreach($rateFrom as $key => $value):
            echo '<option type= "number" value ='. $value.'>'. $key.'</option>'; 
            endforeach;
            ?>
            </select>          
            <input type="submit" name='submit'>
        </form>
    </div> 

    <?php
        if(isset($_POST['submit'])){
        $rate = $_POST['rate'];
        $from = $_POST['from'];
        $curency = $_POST['currency_name'];

        
            $to = 0;
            $to =   ($from * $rate);

            echo 'Your amount '.$from . ',- ' .$curency;
            echo "<br>";
            echo "Exchange rate: " . $rate;
            echo "<br>";        
            echo number_format($from, 2) .",-". $curency ." at an exchange rate of " . number_format($rate, 2). " is " . number_format($to, 2) . " Czech koruna";
        
            echo "<br>";            
 
        }
    ?>



  

</body>
</html>