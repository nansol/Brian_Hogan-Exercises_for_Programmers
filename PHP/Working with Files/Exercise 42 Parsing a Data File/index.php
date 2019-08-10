<?php 
    $list = './listOfNames.csv';
   
    function processCsv($file){

        $csv = fopen($file, 'r');

        //Get the first row column headers
        $headers = fgetcsv($csv);
        //Loop thru of the rest of the file
        while(($row = fgetcsv($csv)) !== false ){
        //Use headers as array keys    
            yield array_combine($headers, $row); //array_combine — Creates an array by using one array for keys and another for its values
       
          
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Parsing a Data File</title>
</head>
<body>
    <header class='container'>
        <h1>Parsing a Data File</h1>
    </header>
    <table>
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Salary</th>
    </tr>
        <?php
            foreach(processCsv($list) as $value){            
            echo "<tr> ";
                echo "<td>".$value['FirstName']."</td>"; 
                echo "<td>".$value['LastName']."</td>"; 
                echo "<td>"."\$".number_format($value['Salary'])."</td>"; 
            echo "</tr>"; 
            }
        ?>   
    </table>   
</body>
</html>