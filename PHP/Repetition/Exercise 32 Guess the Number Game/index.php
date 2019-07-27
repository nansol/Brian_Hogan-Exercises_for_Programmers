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
    <header class="container">
        <div class='row text-center'>
            <div class='col mt-5'>
                <h1>Guess the Number Game</h1>
            </div>
        </div>
    </header>
    <form method="POST">
        <label for="level">Pick a difficulty level (1, 2, or 3)</label>
        <select name="level">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <br>    
    <?php     
    if(isset($_POST['level'])){
        $level = $_POST['level'];
      
        if($level == '1'){
            echo "<input id='guess' type='number' name='guess' min='1' max='10' placeholder='I have my number. What's your guess?' required>";
        }
        elseif($level == '2'){
            echo "<input id='guess' type='number' name='guess' min='1' max='100' placeholder='I have my number. What's your guess?' required>";
        }
        else{
            echo "<input id='guess' type='number' name='guess' min='1' max='1000' placeholder='I have my number. What's your guess?' required>";
        } 
    }
    ?>
    <input type="submit" name='submit'>
     </form>

     <?php
     if(isset($_POST['guess'])){
   
        function level1(){
            $guess = $_POST['guess'];
            $random = rand(1,10);

            if($random == $guess)
            {
                echo 'Correct! The guessed number was ' .$random;
            }
            elseif($random < $guess)
            {
                echo "Too low. Guess again: " .$guess;
            }
            elseif($random > $guess)
            {
                echo "Too high. Guess again: " .$guess;
            }       

        }

        function level2(){
            $guess = $_POST['guess'];
            $random = rand(1,100);

            if($random == $guess)
            {
                echo 'Correct! The guessed number was ' .$random;
            }
            elseif($random < $guess)
            {
                echo "Too low. Guess again: " .$guess;
            }
            elseif($random > $guess)
            {
                echo "Too high. Guess again: " .$guess;
            }       

        }

        function level3(){
            $guess = $_POST['guess'];
            $random = rand(1,1000);

            if($random == $guess)
            {
                echo 'Correct! The guessed number was ' .$random;
            }
            elseif($random < $guess)
            {
                echo "Too low. Guess again: " .$guess;
            }
            elseif($random > $guess)
            {
                echo "Too high. Guess again: " .$guess;
            }       

        }

        if($level == '1'){
            echo level1();
        }
        elseif($level == '2'){
            echo level2();
        }
        else{
            echo level3();
        }
       }

       
    ?>

</body>
</html>