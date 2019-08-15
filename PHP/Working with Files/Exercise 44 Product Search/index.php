<?php
// Read JSON file
$json = file_get_contents('./products.json');

//Decode JSON
$json_data = json_decode($json,true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Product Search</title>
</head>
<body>
    <header class='container'>
        <h1>Product Search</h1>
    </header>
    <form method="POST">
    <input type="text" name='input' placeholder='What is the product name?'required>
    <input type="submit" name='submit'>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $i = $_POST['input'];
        $input = ucfirst($i);


         foreach ($json_data['products'] as $key=>$value){
            if($value['name'] == $input)
            {
                echo 'Name: '.$value['name'].'<br>';
                echo 'Price: $'.$value['price'].'<br>';
                echo 'Quantity on hand:'.$value['quantity'].'<br>';break 1;
            }
            elseif($value['name'] !== $input){
                echo "Sorry, that product was not found in our inventory.<br>";
                echo "
                <form method='POST'>
                <label for='add'>Do you want add product to the list?</label>
                <input type='radio' name='add' value='yes'>Yes
                <input type='radio' name='add' value='no'>No
                <br>
                <input type='submit' name='s'>
                </form>";break 1;    
            }
     }

}

if(isset($_POST['s']) && $_POST['add'] == 'yes')   {
    echo "
    <form method='POST'>
    <input type='text' name='name' placeholder='Add Product Name'>
    <br>
    <input type='text' name='price' placeholder='Add Product Price'>  
    <br>
    <input type='text' name='quantity' placeholder='Add Product Quantity'>
    <br>
    <input type='submit' name='sub'>
    </form>";    
 }


if(isset($_POST['sub'])){
    $n = $_POST['name'];
    $name = ucfirst($n);
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $json_data [] = ['name'=>$name, 'price'=>$price, 'quantity'=>$quantity];
    $json = json_encode($json_data);
    $json_data = json_decode($json,true);

    foreach ($json_data['products'] as $key=>$value){
     
        
            echo 'Name: '.$value['name'].'<br>';
            echo 'Price: $'.$value['price'].'<br>';
            echo 'Quantity on hand:'.$value['quantity'].'<br>';
        }
    
}
    ?>
    
</body>
</html>