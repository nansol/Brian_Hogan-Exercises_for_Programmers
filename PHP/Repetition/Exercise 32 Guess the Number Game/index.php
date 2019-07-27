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
        <select name="level[]">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <br>    
        <input id="guess" type="number" name='guess' min='1' max='10' placeholder="I have my number. What's your guess?">
        <br>
        <input type = "submit" name = "submit" value='submit'>
    </form>
    <?php
     if(isset($_POST['submit'])){
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
        echo level1();
    }
    ?>
    
</body>
</html>