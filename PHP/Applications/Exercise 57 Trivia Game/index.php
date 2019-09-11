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
            <input type="radio" name="<?=$value['id']?>" value="<?=$option[0]?>" required> <?=$option[0]?>
            <br>
            <input type="radio" name="<?=$value['id']?>" value="<?=$option[1]?>" > <?=$option[1]?>
            <br>
            <input type="radio" name="<?=$value['id']?>" value="<?=$option[2]?>" > <?=$option[2]?>
            <br>
        <?php endforeach;?>
    </ul>
    <input type="submit" name='submit'>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $correct=0;

        foreach($list as $key=>$value){
            $answer =$_POST[$value['id']];

            if($answer == $value['capitol'] ){
                $correct++;
          
            }
        }


    header("Location: correct.php");

       
    }

    ?>
    


</body>
</html>

