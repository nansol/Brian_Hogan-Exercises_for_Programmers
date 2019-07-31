<?php
    $list = './EmployeeListRemoval.csv';
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
    <title>Employee List Removal</title>
</head>
<body>
    <header class="container">
        <h1>Employee List Removal</h1>
    </header>
    <div class='container'>
        <p>There are 5 Employees</p>
        <?php foreach(processCsv($list) as $key=>$value){
                echo $value['Name'].' '.$value['Surname'].'<br>';
            }
        ?>  
        <form method="POST">
            <label for="input">Enter an employee name to remove</label>
            <br>
            <input id='input' type="text" name='input' required>
            <br>
            <input type="submit" name='submit'>
        </form>
    </div>

    
</body>
</html>