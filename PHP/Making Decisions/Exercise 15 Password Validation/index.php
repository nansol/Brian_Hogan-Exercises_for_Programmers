<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Password Validation</title>
</head>
<body>
    <header class="container">
        <h1>Password Validatior</h1>
    </header>
     <div class='container'>
        <form action="" method='POST'>
            <input type="text" name='username'  placeholder='username' required>  
            <br>
            <input type="password" name='password'  placeholder='password' required>  
            <br>
            <input type="submit" name='submit'>
            <br>
        </form>
    </div>
    <?php
      $nancy ="test123";
      $nene = "heslo123";
      $nena = "abc123";

      $login = ['nancy' => password_hash($nancy, PASSWORD_BCRYPT), 'nene' => password_hash($nene, PASSWORD_BCRYPT), 'nena' => password_hash($nena, PASSWORD_BCRYPT)];

    if(isset($_POST['submit'])){

        
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $username = $_POST['username'];
        $error = "I don't know you.";
        $success = "Welcome!";
    
        foreach($login as $username =>$hash){

            if ( password_verify($_POST['password'],$hash) && ($_POST['username'] == $username)){

            echo "Correct Password ". $success .$username ." " . $password . "<br>";               
            }
            else{            
                echo "Incorrect Password " . $error . "<br>";
            }
        }
    }
            


?>



</body>
</html>