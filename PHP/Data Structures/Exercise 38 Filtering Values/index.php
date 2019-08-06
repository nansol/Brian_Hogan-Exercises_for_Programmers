<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Filtering Values</title>
</head>
<body>
    <header class="container">
        <h1>Filtering Values</h1>
    </header>
    <form method="POST">
        <?php
            for ($i = 0; $i < 10; $i++) {
                echo "<input type='number' placeholder='Enter a number' name='input[]'". $i." /><br>";
            }
        ?>
        <input type="submit" name='submit'>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $input = $_POST['input'];

        foreach($input as $key=>$value){
            if($value % 2 ==0){
                $even[] = $value;
                echo " ".$value;
            }
        }

        echo "<br>";

        foreach($even as $key=>$value){
            echo " ".$value;
        }

    }

    ?>
</body>
</html>