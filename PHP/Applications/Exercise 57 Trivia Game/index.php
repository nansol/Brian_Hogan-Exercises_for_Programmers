<?php
    include "sql.php";
    shuffle($list);
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
        <?php 
     
        $option = [$value['capitol'], $value['choice1'], $value['choice2']];
        shuffle($option);
        ?>
        <li> <h5>What is capitol city of <?php echo $value['country']."?";?></h5> </li>
            <input type="radio" name="quizid<?=$value['id']?>" value="<?=$option[0]?>" required> <?=$option[0]?>
            <br>
            <input type="radio" name="quizid<?=$value['id']?>" value="<?=$option[1]?>" required> <?=$option[1]?>
            <br>
            <input type="radio" name="quizid<?=$value['id']?>" value="<?=$option[2]?>" required> <?=$option[2]?>
            <br>
        <?php endforeach;?>
    </ul>
    <input type="submit" name='submit'>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $correct =$_POST['correct'];
        $count = count($correct);
        echo $count;
    }
    ?>
    


</body>
</html>

