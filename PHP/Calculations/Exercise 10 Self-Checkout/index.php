<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Self-Checkout</title>
</head>
<body>
    <header class='header'>
        <h1>Self-Checkout</h1>
    </header>
    <div class='container'>
        <div class='column'>
        <h2>Item #</h2>
        </div>
        <div class='column'>
        <h2>Quantity</h2>
        </div>
        <div class='column'>
        <h2>Price</h2>
        </div>
     </div>        
     <form  method='POST'>
     <div class='container-input'>
        <div class='column-input'>
            <input type="number" min='1' max='1' name ='item1' placeholder='Item #1'>
        </div>
        <div class='column-input'>
            <input type="number" min='1' name ='quantityOfItem1' placeholder='Add quantity'>
        </div>
        <div class='column-input'>
            <input type="number" min='1' name='priceOfItem1'placeholder='Add price'>
        </div>       
     </div>
     <div class='container-input'>
        <div class='column-input'>
            <input type="number" min='2' max='2' name ='item2' placeholder='Item #2'>
        </div>
        <div class='column-input'>
            <input type="number" min='1'name ='quantityOfItem2' placeholder='Add quantity'>
        </div>
        <div class='column-input'>
            <input type="number"  min='1' name='priceOfItem2' placeholder='Add price'>
        </div>
     </div>
     <div class='container-input'>
        <div class='column-input'>
            <input type="number" min='3' max='3' name ='item3' placeholder='Item #3'>
        </div>
        <div class='column-input'>
            <input type="number" min='1' name ='quantityOfItem3' placeholder='Add quantity'>
        </div>
        <div class='column-input'>
            <input type="number" min='1' name='priceOfItem3' placeholder='Add price'>
        </div>
     </div>
     <div class='container-input'>
        <div class='column-input'>
            <input type="number" min='4' max='4' name ='item4' placeholder='Item #4'>
        </div>
        <div class='column-input'>
            <input type="number" min='1' name ='quantityOfItem4'placeholder='Add quantity'>
        </div>
        <div class='column-input'>
            <input type="number" min='1' name='priceOfItem4'  placeholder='Add price'>
        </div>
     </div>
     <div class='container-input'>
        <div class='column-input'>
            <input type="number" min='5' max='5' name ='item5' placeholder='Item #5'>
        </div>
        <div class='column-input'>
            <input type="number" min='1' name ='quantityOfItem5' placeholder='Add quantity'>
        </div>
        <div class='column-input'>
            <input type="number" min='1' name='priceOfItem5'  placeholder='Add price'>
        </div>
     </div>
     <div>
     <div class='container'>
        <div class='column'>
            <input class='submit' type="submit" name='submit'>
        </div>
     </div>

     </form>
     <?php

if(isset($_POST['submit'])){

    $item1 = $_POST['item1']; 
    $item2 = $_POST['item2']; 
    $item3 = $_POST['item3']; 
    $item4 = $_POST['item4']; 
    $item5 = $_POST['item5']; 

    $quantityOfItem1 =  $_POST['quantityOfItem1']; 
    $quantityOfItem2 =  $_POST['quantityOfItem2']; 
    $quantityOfItem3 =  $_POST['quantityOfItem3']; 
    $quantityOfItem4 =  $_POST['quantityOfItem4']; 
    $quantityOfItem5 =  $_POST['quantityOfItem5']; 

    $priceOfItem1 = $_POST['priceOfItem1'];
    $priceOfItem2 = $_POST['priceOfItem2'];
    $priceOfItem3 = $_POST['priceOfItem3'];
    $priceOfItem4 = $_POST['priceOfItem4'];
    $priceOfItem5 = $_POST['priceOfItem5'];

    $tax =0.055;

    $subtotalItem1 = $quantityOfItem1 * $priceOfItem1 ;
    $subtotalItem2 = $quantityOfItem2 * $priceOfItem2 ;
    $subtotalItem3 = $quantityOfItem3 * $priceOfItem3 ;
    $subtotalItem4 = $quantityOfItem4 * $priceOfItem4 ;
    $subtotalItem5 = $quantityOfItem5 * $priceOfItem5 ;

    $subtotal= $subtotalItem1 + $subtotalItem2 + $subtotalItem3 + $subtotalItem4 + $subtotalItem5;
    $taxTotalRate = $subtotal  * $tax;
    $total =  $subtotal +  $taxTotalRate;

}

?>

<?php 
if(isset($_POST['submit'])){
   
    echo " <div class='container'>";
        echo "<div class='result'>";
            echo "<p>The price of item 1: " . $priceOfItem1 . "</p>";
            echo "<p>The quantiry of item 1: " .$quantityOfItem1  ."</p>";
            echo "<br>";
            echo "<p>The price of item 2: " . $priceOfItem2 . "</p>";
            echo "<p>The quantiry of item 2: " .$quantityOfItem2  ."</p>";
            echo "<br>";
            echo "<p>The price of item 3: " . $priceOfItem3 . "</p>";
            echo "<p>The quantiry of item 3: " .$quantityOfItem3  ."</p>";
            echo "<br>";
            echo "<p>The price of item 4: " .$priceOfItem4. "</p>";
            echo "<p>The quantiry of item 4: " .$quantityOfItem4  ."</p>";
            echo "<br>";
            echo "<p>The price of item 5: " . $priceOfItem5. "</p>";
            echo "<p>The quantiry of item 5: " .$quantityOfItem5  ."</p>";
            echo "<br>";
            echo "<p class='subtotal'>Subtotal: " . "$".number_format($subtotal,2) . "</p>";
            echo "<p class='tax'>Tax: " . "$".number_format($taxTotalRate,2)   ."</p>";
            echo "<p class='total'>Total: " . "$".number_format($total,2)  ."</p>";
            echo "<br>";    
        echo "</div>";   
    echo "</div>";   


}
?>


</body>
</html>