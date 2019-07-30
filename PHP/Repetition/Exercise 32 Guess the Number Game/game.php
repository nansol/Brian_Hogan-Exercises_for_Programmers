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
    <link rel="stylesheet" href="style.css">
    <title>Guess the Number Game</title>
</head>
<body>
    <div class='container'>
        <form method="POST">
            <?php     
                if(isset($_POST['submit'])){
                  echo "You chose level: " .$level."<br>";
                                
                    if($level == '1'){
                        echo "<input id='guess' type='number' name='guess10' min='1' max='10' placeholder='I have my number. What is your guess?' required>";
                    }
                    elseif($level == '2'){
                        echo "<input id='guess' type='number' name='guess100' min='1' max='100' placeholder='I have my number. What is your guess?' required>";
                    }
                    else{
                        echo "<input id='guess' type='number' name='guess1000' min='1' max='1000' placeholder='I have my number. What is your guess?' required>";
                    }   
                }
            ?>
              <input type="hidden" name="numtobeguessed" value="<?php echo $_POST["numtobeguessed"]; ?>" ></p>
        </form>
    </div>

    <?php
        if(isset($_POST['guess10'])){   
            $guess = $_POST['guess10'];
            $random = rand(1,10);
            $_SESSION["count"] = 0;
            $count =$_SESSION["count"];

        //echo"My number is " .$random."<br>";

            if($random == $guess){ 
                echo 'Correct! The guessed number was ' .$random."<br>";
                switch ($count) {
                case $count == 1:
                echo "You are a mind reader!";
                break;
                case $count > 1 || $count < 4 :
                echo "Most impressive!";
                break;
                case $count > 5 || $count < 6 :
                echo "You can do better than that";
                break;
                case $count > 7:
                echo "Better luck next time";    
                }                     
            unset($_SESSION["count"]);
            }
            elseif($random > $guess){
                echo "Too low. Guess again: " .$guess."<br>";
                echo "<form method='POST'>";
                    echo "<input id='guess' type='number' name='guess10' min='1' max='10' placeholder='I have my number. What's your guess?' required>";
                echo "</form>";
                $_SESSION["count"]++;
            }
            elseif($random < $guess){
                echo "Too high. Guess again: " .$guess."<br>";
                echo "<form method='POST'>";
                    echo "<input id='guess' type='number' name='guess10' min='1' max='10' placeholder='I have my number. What's your guess?' required>";
                echo "</form>";
                $_SESSION["count"]++;
            }       
        }

        if(isset($_POST['guess100'])){
            $guess = $_POST['guess100'];
            $random = rand(1,100);
            $_SESSION["count"] = 0;
            $count =$_SESSION["count"];

        //echo"My number is " .$random."<br>";

            if($random == $guess){
                echo 'Correct! The guessed number was ' .$random."<br>";
                switch ($count) {
                case $count == 1:
                echo "You are a mind reader!";
                break;
                case $count > 1 || $count < 4 :
                echo "Most impressive!";
                break;
                case $count > 5 || $count < 6 :
                echo "You can do better than that";
                break;
                case $count > 7:
                echo "Better luck next time";    
                }                     
            unset($_SESSION["count"]);
            }
            elseif($random > $guess){
            echo "Too low. Guess again: " .$guess."<br>"            ;
            echo "<form method='POST'>";
                echo "<input id='guess' type='number' name='guess100' min='1' max='100' placeholder='I have my number. What's your guess?' required>";
            echo "</form>";
            }
            elseif($random < $guess){
            echo "Too high. Guess again: " .$guess."<br>";
            echo "<form method='POST'>";
                echo "<input id='guess' type='number' name='guess100' min='1' max='100' placeholder='I have my number. What's your guess?' required>";
            echo "</form>";
            }       
        }

            if(isset($_POST['guess1000'])){
                $guess = $_POST['guess1000'];
                $random = rand(1,1000);
                $_SESSION["count"] = 0;
                $count =$_SESSION["count"];

            //echo"My number is " .$random."<br>";

            if($random == $guess){   
                echo 'Correct! The guessed number was ' .$random."<br>";
                switch ($count) {
                case $count == 1:
                echo "You are a mind reader!";
                break;
                case $count > 1 || $count < 4 :
                echo "Most impressive!";
                break;
                case $count > 5 || $count < 6 :
                echo "You can do better than that";
                break;
                case $count > 7:
                echo "Better luck next time";    
                }                     
            unset($_SESSION["count"]);
            }
            elseif($random > $guess){
            echo "Too low. Guess again: " .$guess."<br>";
            echo "<form method='POST'>";
                echo "<input id='guess' type='number' name='guess1000' min='1' max='1000' placeholder='I have my number. What's your guess?' required>";
            echo "</form>";
            }
            elseif($random < $guess)
            {
            echo "Too high. Guess again: " .$guess."<br>";
            echo "<form method='POST'>";
                echo "<input id='guess' type='number' name='guess1000' min='1' max='1000' placeholder='I have my number. What's your guess?' required>";
            echo "</form>";
            }       
        }  
    ?>
</body>
</html>