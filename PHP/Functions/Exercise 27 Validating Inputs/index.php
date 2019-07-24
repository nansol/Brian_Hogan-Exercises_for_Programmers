<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Validating Inputs</title>
</head>
<body>
    <header class="container">
        <h1>Validating Inputs</h1>
    </header>
    <div class='container'>
         <form method='POST'>
            <input type="text" name='name'  placeholder='Enter your first name'>  
            <br>
            <input type="text" name='surname' placeholder='Enter your last name'>  
            <br>
            <input type="text" name='id'  placeholder='Enter your employee ID'>  
            <br>
            <input type="text" name='zip' placeholder='Enter your ZIP code'>  
            <br>
            <input type="submit" name='submit'>
            <br>
        </form>
    </div>  

    <?php

    function name(){
        $name = $_POST['name'];
            if(preg_match("/[a-zA-Z]{2,}/", $name) ){
                echo "Your first name is: " .$name . "<br>";
            }
            else{
                echo $_POST['name'] ." is not a valid first name. It is too short.<br>";
            } 
    }

    function surname(){
        $surname = $_POST['surname'];
            if(preg_match("/[a-zA-Z]{2,}/", $surname)){
                echo "Your last name: " .$surname . "<br>";
            }
            else{
                echo "The last name must be filled in.<br>";
            }
    }

    function id(){
        $id = $_POST['id'];
            if(preg_match('/[A-Z]{1}[A-Z]{1}\-{1}[0-9]{4}/', $id)){
                echo "Your an Employee ID: " .$id . "<br>";
            }
            else{
                echo $_POST['id'] ." is not a valid format.<br>";
            }
    }

    function zip(){
        $zip = $_POST['zip'];
            if(preg_match('/[0-9]{5}/', $zip)){
                echo "Your ZIP code: " .$zip . "<br>";
            }
            else{
                echo $_POST['zip'] ." is not a valid format.<br>";
            }
    }

    if(isset($_POST['submit'])){
        function validateInput(){
            echo name();
            echo surname();
            echo id();
            echo zip();
        }
        echo validateInput();

    }
    ?>

</body>
</html>