<?php
    include "sql.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Trivia Game</title>
</head>
<body>
    <form method="POST">
    <ul>
        <?php foreach($list as $key=>$value) :?>
        <h4>What is capitol city of <?php echo $value['country']."?";?></h4>
            <input type='radio'><?php echo $value['randomCity'] ?>
            <input type='radio'><?php echo $value['randomCity2'] ?>
            <input type='radio'><?php echo $value['capitolCity'] ?>
        <?php endforeach;?>
    </ul>
    </form>
</body>
</html>