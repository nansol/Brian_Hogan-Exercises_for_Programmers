<?php 
    session_start();
    $_SESSION['level'] = htmlentities($_POST['level']);
    $level = $_SESSION['level'];
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guess the Number Game</title>
</head>
<body>
    <div class='container'>
        <form method="POST">
            <?php     
                if(isset($_POST['submit'])){
                    echo "You chose level: " .$level."<br>";
                                
                    if($level == '1'){
                        echo "<input id='guess' type='number' name='guess' min='1' max='10' placeholder='I have my number. What is your guess?' required>";
                    }
                    elseif($level == '2'){
                        echo "<input id='guess' type='number' name='guess' min='1' max='100' placeholder='I have my number. What is your guess?' required>";
                    }
                    else{
                        echo "<input id='guess' type='number' name='guess' min='1' max='1000' placeholder='I have my number. What is your guess?' required>";
                    }   
                }
           ?>
        </form>
    </div>

    
</body>
</html>