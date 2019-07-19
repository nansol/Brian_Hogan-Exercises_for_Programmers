<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Comparing Numbers</title>
</head>
<body>
    <header class="container">
        <h1>Comparing Numbers</h1>
    </header>
        <div class='container'>
            <p>Enter a 10 numbers</p>
            <form method='POST'>
            <input type="number" name='num[]' min="1" required>  
            <br>
            <input type="number" name='num[]' min="1" required>  
            <br>
            <input type="number" name='num[]' min="1" required>  
            <br>
            <input type="number" name='num[]' min="1" required>  
            <br>
            <input type="number" name='num[]' min="1" required>  
            <br>
            <input type="number" name='num[]' min="1" required>  
            <br>
            <input type="number" name='num[]' min="1" required>  
            <br>
            <input type="number" name='num[]' min="1" required> 
            <br>
            <input type="number" name='num[]' min="1" required>  
            <br>
            <input type="number" name='num[]' min="1" required> 
            <br>
            <input type="submit" name='submit'>
            <br>
        </form>
<?php
if(isset($_POST['submit'])){
    $num = $_POST['num'];
    $x = 0;


    foreach($num as $value){
        if($x < $value){
            $x = $value;
        }}
        if($x == $value){
            echo $x;
        }}


?>

</body>
</html>