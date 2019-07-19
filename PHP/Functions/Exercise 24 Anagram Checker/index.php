<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Anagram Checker</title>
</head>
<body>
    <header class="container">
        <h1>Anagram Checker</h1>
    </header>
     <div class='container'>
         <p>Enter two strings and I'll tell you if they are anagrams:</p>
         <form method='POST'>
            <input type="text" name='a'  placeholder='Enter first word:'required>  
            <br>
            <input type="text" name='b'  placeholder='Enter second word:'required>  
            <br>
            <input type="submit" name='submit'>
            <br>
        </form>
    </div>  

    <?php
    function isAnagram(){
        if(isset($_POST["submit"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            $firstWord = str_split($a);
            $secondWord =str_split($b);
            $result = array_diff($firstWord,$secondWord);
        
            if(count($result) == 0 ){
                echo $a . " and " .$b ." are anagrams.";
            }
        }
    }

    echo isAnagram();

    ?>

</body>
</html>