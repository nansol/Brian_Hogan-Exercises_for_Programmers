<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <form  method="POST">
        What is your name?
        <input id='name' type="text" name="name">

    </form>


    <?php
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        echo 'Hello, ' .$name .', nice to meet you!';
    }
    "<br>"


    ?>
<br>


<!-- without using variable -->
<?php
    if(isset($_POST['name'])){
        echo 'Hello, ' . $_POST['name'] .', nice to meet you!';
    }
    ?>

</body>
</html>
