<?php 
       if(isset($_POST['submit'])){
            session_start();
            $_SESSION['level'] = htmlentities($_POST['level']);
            $level = $_SESSION['level'];
        }
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
    <header class="container">
        <div class='row'>
            <div class='col'>
                <h1>Guess the Number Game</h1>
            </div>
        </div>
    </header>
    <form method="POST" action="game.php">
        <label for="level">Pick a difficulty level (1, 2, or 3)</label>
        <select name="level">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <br>    
        <input type="submit" name='submit'>
    </form>
</body>
</html>