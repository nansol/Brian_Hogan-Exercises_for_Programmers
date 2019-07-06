<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class='counter'>
        <div class='output'>
            <?php
                if(empty($_POST['countCharacters'])){
                    $countCharacters = $_POST['countCharacters'];
                    echo "Add text to count how many characters are in your text";
                } 
                else 
                {   
                    echo  "Your text has ". strlen($_POST['countCharacters']) . " characters";
                }
            ?> 
        </div>
    </div>
    
</body>
</html>





