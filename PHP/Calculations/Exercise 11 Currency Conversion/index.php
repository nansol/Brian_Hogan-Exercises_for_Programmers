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
            echo "<br>";        

        }
    ?> 

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
            <input type="submit" name='convert'>
        </form>
    </div> 

    <?php
        if(isset($_POST['convert'])){
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


    <div class='container'>
        <form action="" method='POST'>
            <input type="text" name='from'  step=any  placeholder='From' required>
            <br>
            <input type="text" name='to'  step=any  placeholder='To' required> 
            <br>
             <input type="number" name='amount'  min='1' step=any  placeholder='Amount' required>  
             <br>
            <input type="submit" name='sub'>
        </form>
    </div>

    <?php
    if (isset($_POST['sub'])){

        $from = $_POST['from'];
        $to = $_POST['to'];
        $amount = $_POST['amount'];
        $string = $from . "_" . $to;

             

 /*      
        Test to try it easier way, THERE IS ERROR MESSAGE because of file_get_contents connection
        if(isset($_POST['sub'])){
            $url = file_get_contents('https://free.currconv.com/api/v7/convert?q=$string&compact=ultra&apiKey=077a14ccdda3d9181804');
            $rateArray = json_decode($url, true);
            $total = $url * $amount;

            echo $amount . $from . " = " .number_format($total,2) . $to;
        } 

*/

        $curl = curl_init(); //Initialize a cURL session
        curl_setopt_array($curl, array(

            CURLOPT_URL => "https://free.currconv.com/api/v7/convert?q=$string&compact=ultra&apiKey=077a14ccdda3d9181804",
            // CURLOPT_URL The URL to fetch. This can also be set when initializing a session with curl_init().	
            CURLOPT_RETURNTRANSFER => 1
            // CURLOPT_RETURNTRANSFER TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
        )); //Set multiple options for a cURL transfer

        $response = curl_exec($curl);
        $response = json_decode($response, true);
        $rate = $response[$string];

        $total = $rate * $amount;

        echo $amount . $from . " = " .number_format($total,2) . $to; 
    
    }
    ?>


  

</body>
</html>