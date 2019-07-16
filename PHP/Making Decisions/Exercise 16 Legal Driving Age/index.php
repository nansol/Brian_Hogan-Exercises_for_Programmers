<?php
    $states = './LegalDrivingAgeInUSANumbers.csv';
    function processCsv($file){

        $csv = fopen($file, 'r');

        //Get the first row column headers
        $headers = fgetcsv($csv);
        //Loop thru of the rest of the file
        while(($row = fgetcsv($csv)) !== false ){
        //Use headers as array keys    
            yield array_combine($headers, $row); //array_combine — Creates an array by using one array for keys and another for its values
        }
        fclose($csv);
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Legal Driving Age</title>
</head>
<body>
    <header class="container">
        <h1>Legal Driving Age</h1>
    </header>
     <div class='container'>
        <form action="" method='POST'>
            <input type="number" name='age' step=any  min='1' placeholder='Add your age'required>  
            <br>
            <select name="state" id="">
                <?php
                    foreach(processCsv($states) as $key=>$value):
                    echo '<option type= "text" value ='. $value['State'].'>'. $value['State'].'</option>'; 
                    endforeach;
                ?>   
            </select>
            <br>
            <input type="submit" name='submit'>
            <br>
        </form>
    </div>
    
<?php

if(isset($_POST['submit'])){
    $age = $_POST['age'];
    $state = $_POST['state'];


    foreach(processCsv($states) as $value){
     

        if ($state == $value['State']){
            if(($age >= $value["Minimum Age for Learner's Permit"])){
                if(($age >= $value["Minimum Age for Restricted License"])) {
                    if(($age >= $value["Minimum Age for Full (Unrestricted) License"])){
                        echo "You are old enough for Full (Unrestricted) License"; break;
                    }
                    echo "You are old enough for Restricted License"; break;
                } 
                echo "You are old enough for Learner's Permit"; 
               }
               else{  
                echo "You are not old enough to legally drive." ;
            }
        }
    }

}

?>

</body>
</html>

