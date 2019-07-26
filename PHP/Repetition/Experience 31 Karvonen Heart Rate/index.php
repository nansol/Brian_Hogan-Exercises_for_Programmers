<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Karvonen Heart Rate</title>
</head>
<body>
    <header class="container">
        <div class='row text-center'>
            <div class='col mt-5'>
                <h1>Karvonen Heart Rate</h1>
            </div>
        </div>
    </header>
    <form method="POST">
        <input type="number" name='age'min="1" placeholder="Enter your age" required>
        <br>
        <input type="number" name='rate' min="1" placeholder="Enter your resting heart rate" required>
        <br>
        <input type="submit" name="submit">
    </form>

    <?php 
    if(isset($_POST['submit'])){
        $age = $_POST['age'];
        $rate = $_POST['rate'];
        $result = 0;

        echo "<div class='flex-container'>";
        echo "<div>Intensity</div>";
        echo "<div>Rate</div>";
        echo "</div>";

        for ($i = 55; $i <= 95; $i+=5 ){
        $result = (((220 - $age) - $rate) * $i/100) + $rate;
        echo "<div class='flex-container'>";
        echo "<div>". $i .'%' ."</div><br>";
        echo "<div>" .round($result). " bpm"."</div><br>";
        echo "</div>";
        }
    }
    ?>


</body>
</html>