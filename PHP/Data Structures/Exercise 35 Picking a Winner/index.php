<?php
 $data = ["congue.a@amet.com","non@et.org","vel.venenatis@iaculisenim.ca","iaculis.lacus.pede@Maurisnulla.com","a.ultricies@risus.ca","quis@habitantmorbi.edu",
"ornare@mollisnon.ca","in.dolor@accumsansedfacilisis.co.uk","amet.metus.Aliquam@non.com","molestie.Sed.id@magnatellusfaucibus.com"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styel.css">
    <title>Picking a Winner</title>
</head>
<body>
    <header class="container">
        <h1>Picking a Winner</h1>
    </header>
    <div class='container'>
    <ol>
        <?php  foreach($data as $key=>$value){
            echo "<li>" .$value ."</li>";}
        ?>
    </ol>
        <?php      
            shuffle($data);
            $winner3 = array_shift($data);
            echo "<h3>Winner of 3.place is: <br> $winner3 </h3>";
            echo "<br>";
            echo "<ol>";
            foreach($data as $key=>$value){
            echo "<li>" .$value ."</li>";}
            echo "</ol>";
            echo "<br>";

            shuffle($data);
            $winner3 = array_shift($data);
            echo "<h3>Winner of 2.place is: <br> $winner3 </h3>";
            echo "<br>";
            echo "<ol>";
            foreach($data as $key=>$value){
            echo "<li>" .$value ."</li>";}
            echo "</ol>";
            echo "<br>";

            shuffle($data);
            $winner3 = array_shift($data);
            echo "<h2>Winner of 1.place is: <br> $winner3 </h2>";
            echo "<br>";
            echo "<ol>";
            foreach($data as $key=>$value){
            echo "<li>" .$value ."</li>";}
            echo "</ol>";
            echo "<br>";

        ?>
    </div>
    <?php

     echo "<br>";

     shuffle($data);
     $winner3 = array_shift($data);
     echo "<br>";


     shuffle($data);
     $winner2 = array_shift($data);
     echo "<br>";

     shuffle($data);
     $winner1 = array_shift($data);



  
    ?>
</body>
</html>