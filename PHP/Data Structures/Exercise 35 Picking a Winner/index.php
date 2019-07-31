<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styel.css">
    <title>Picking a Winner</title>
</head>
<body>
    <header class="container">
        <h1>Picking a Winner</h1>
    </header>
    <div class='container'>
         <form method="POST">
            <label for="input">Enter your name</label>
            <br>
            <?php 
            for($i=1; $i<5; $i++)
            {
                echo "<input id='input' type='text' name='input[]'.$i . required><br>";
            }
            ?>
            <br>
            <input type="submit" name='submit'>
        </form>
    </div>
    <?php
    if(isset($_POST['submit'])){      
    $input = $_POST['input'];


      
  }
    ?>
</body>
</html>