<?php
    $list = './EmployeeListRemoval.csv';
    $e = array_map('str_getcsv', file($list));

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
    $count = count($e)-1;

    $test = array(
            array(
                "ID" => "ID",
                "Name" => "Name",
                "Surname" => "Surname",
            ),
            array(
                "ID" => 1,
                "Name" => "John",
                "Surname" => "Smith",
            ),
            array(
                "ID" => 2,
                "Name" => "Jackie",
                "Surname" => "Jackson",
            ),   
            array(
                "ID" => 3,
                "Name" => "Chris",
                "Surname" => "Jones",
            ),  
            array(
                "ID" =>4,
                "Name" => "Amanda",
                "Surname" => "Cullen",
            ),   
            array(
                "ID" =>5,
                "Name" => "Jeremy",
                "Surname" => "Goodwin",
            ),  
        ); 

    $name_to_exclude = "Jackie Jackson";

    $exclude = explode(' ', $name_to_exclude);
    $test = array_filter($test, function($val) use ($exclude) { 
    if(array_key_exists(0, $exclude) && array_key_exists(1, $exclude)) {
    return $val['Name'] != $exclude[0] && $val['Surname'] != $exclude[1];
    }
    return true;

    });

    print_r($test);
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
        <p>There are <?php echo $count; ?> Employees</p>
        <?php foreach(processCsv($list) as $key=>$value)
            {
                echo $value['Name'] . " ".$value['Surname']."<br>"; 
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

    <?php
    if(isset($_POST['submit'])){
        $input = $_POST['input'];
        $array = explode(" ",$input);
        foreach($array as $v){
            foreach(processCsv($list) as $key=>$value)
            {  
                if($v == $value['Name'] || $v == $value['Surname'])
                {
                unset($e[$key]);
                }
            }
        }


/* Remove Items from $test  */


 
         foreach($array as $v){
            foreach($test as $key=>$value)
            {  
                if($v == $value['Name'] || $v == $value['Surname'])
                {
                unset($test[$key]);
                }
            }
        }


         $count = count($e)-1;
         echo "There are ".$count. " Employees: <br>";
         echo "<br>";

         foreach($test as $t){
            if("Name" == $t['Name'] || "Surname" == $t['Surname'])
            {
                true;
            }
            else{
                echo $t['Name']." ".$t['Surname']."<br>";
            }
        }
    }




    ?>

    
</body>
</html>