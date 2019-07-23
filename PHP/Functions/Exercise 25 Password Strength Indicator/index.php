<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Password Strength Indicator</title>
</head>
<body>
    <header class="container">
        <h1>Password Strength Indicator</h1>
    </header>
     <div class='container'>
         <form method='POST'>
            <input type="password" name='psw'  placeholder='Create your password'required>  
            <br>
            <input type="submit" name='submit'>
            <br>
        </form>
    </div>  

    <?php
    if(isset($_POST['submit'])){
        $password = $_POST['psw'];
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        //(?=\S{8,})

        //A very weak password contains only numbers and is fewer than eight characters
        if($number){
            echo "The password ".  $password  ." is a very weak password.";
        }

  
       
    }
    ?>

    
</body>
</html>