<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Handling Bad Input</title>
</head>
<body>
    <header class="container">
        <h1>Adding Numbers</h1>
    </header>
    <div class="container">
        <form method="POST">
            <input type="number" min="1"name="rate" placeholder="What is the rate of return? ">
            <input type="submit" name="submit">
        </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $rate = $_POST['rate'];
        $years = 72/$rate;

        echo "It will take " .$years. " years to double your initial investment.";
    }
    ?>


</body>
</html>