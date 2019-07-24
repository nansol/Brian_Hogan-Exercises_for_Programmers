<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Adding Numbers</title>
</head>
<body>
    <header class="container">
        <h1>Adding Numbers</h1>
    </header>
    <form method = "POST">
        <?php
            for ($i = 0; $i < 5; $i++) {
                echo "<input type='number' placeholder='Enter a number' name='input[]'". $i." /><br>";
            }
        ?>
        <input type="submit" name='submit'>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $i = $_POST['input'];
        $total = 0;

    foreach($i as $value){
        echo "Enter a number: " .$value ."<br>";
        
        $total+=$value;
    }
        echo "The total is " .$total.".";
    }
    ?>

</body>
</html>