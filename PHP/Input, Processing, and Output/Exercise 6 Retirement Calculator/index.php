<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retirement Calculator</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <input type="number" name='currentAge' min="0"  placeholder='What is your current age?' required>
            <input type="number" name='retiredAge' min="0" placeholder='At what age would you like to retire?' required>    
            <input type="submit" name="submit">    
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])){
        $count = $_POST['retiredAge'] - $_POST['currentAge'];
        $retireYear = date('Y') + $count;

        echo 'You have ' . $count . ' years left until you can retire.';
        echo "<br>";
        echo 'It\'s ' . date("Y") . ', so you can retire in '.  $retireYear;
    }
 ?>
    
</body>
</html>