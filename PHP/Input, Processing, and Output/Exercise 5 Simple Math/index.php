<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Math</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <input type="text" name="num1" placeholder="Enter a number 1" required>
            <input type="text" name="num2" placeholder="Enter a number 2" required>
            <input type="submit" name="submit">
        </form>
    </div>

    <?php

function SimpleMath(){
    if(isset($_POST["submit"]))
    { 
       $count = (int)$_POST['num1'] +  (int)$_POST['num2'];
       echo $_POST['num1'] . ' + ' . $_POST['num2'] . ' = ' . $count;      

       echo "<br>";

       $minus = (int)$_POST['num1'] -  (int)$_POST['num2'];
       echo $_POST['num1'] . ' - ' . $_POST['num2'] . ' = ' . $minus;  

       echo "<br>";

       $multiply = (int)$_POST['num1'] *  (int)$_POST['num2'];
       echo $_POST['num1'] . ' * ' . $_POST['num2'] . ' = ' . $multiply;  

       echo "<br>";

       $division = (int)$_POST['num1'] /  (int)$_POST['num2'];
       echo $_POST['num1'] . ' / ' . $_POST['num2'] . ' = ' . $division;  

    }
    
    }

    echo SimpleMath();

    ?>
    



</body>
</html>