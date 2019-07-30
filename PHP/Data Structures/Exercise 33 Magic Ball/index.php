<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Magic Ball</title>
</head>
<body>
    <header class="container">
            <h1>Magic Ball</h1>
    </header>
    <div class='container'>
        <form method="POST">
            <label for="input">What's your question? </label>
            <br>
            <input id='input' type="text" name='input' required>
            <br>
            <input type="submit" name='submit'>
        </form>
    </div>

    <?php 
    $output = ['Yes','No','Maybe','Ask again later'];
    $random=array_rand($output,3);
        if(isset($_POST['submit']))
        {
            $input = $_POST['input'];
            echo "Your question: " .$input."<br>";
            echo "<br>";
            echo $output[array_rand($output)]."<br>";
        }
    ?>
    
</body>
</html>