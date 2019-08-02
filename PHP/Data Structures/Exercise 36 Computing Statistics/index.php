<?php 
$e = [119,144,825,758,878,635,304,126,986,652,441,215,390,11,688,582,849,111,436,401,291,371,192,654,392,264,299,444,368,791,508,170,441,377,588,777,116,869,808,444,127,
594,369,408,516,994,769,900,916,705,451,398,548,924,781,831,505,254,909,854,448,594,287,482,948,426,114,241,790,100,437,122,899,674,356,954,150,968,888,421,226,389,408,876,805,351,381,613,249,
536,246,738,986,101,276,504,827,165,983,907]?>

    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Computing Statistics</title>
</head>
<body>
    <header class="container">
        <h1>Computing Statistics</h1>
    </header>
    <?php
 
    $mean = array_sum($e) / count($e);
    echo "The average is " .$mean."<br>";
    $min = min($e);
    echo "The minimum is " .$min."<br>";
    $max = max($e);
    echo "The maximum is " .$max."<br>";

/*     To compute the standard deviation
    1. Calculate the difference from the mean for each number
    and square it.
    2. Compute the mean of the squared values.
    3. Take the square root of the mean. */
    //echo "The standard deviation is " .$st."<br>";
    ?>


</body>
</html>