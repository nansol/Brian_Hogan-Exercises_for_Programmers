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
    <ol>
        <?php foreach($list as $key=>$value) :?>
        <li> <h5>What is capitol city of <?php echo $value['country']."?";?></h5> </li>
            <input type='radio' name='incorrect'><?php echo $value['randomCity'] ?>
            <br>
            <input type='radio'name='incorrect'><?php echo $value['randomCity2'] ?>
            <br>
            <input type='radio'name='correct'><?php echo $value['capitolCity'] ?>
        <?php endforeach;?>
    </ol>
    </form>
    <?php
    if(isset($_POST['correct']) || isset($_POST['incorrect'])){
        $correct[]=$_POST['correct'];
        $count = count($correct);
    }
    ?>
</body>
</html>