<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Multiplication Table</title>
</head>
<body>
    <header class="container">
        <div class='row text-center'>
            <div class='col mt-5'>
                <h1>Multiplication Table</h1>
            </div>
        </div>
    </header>
    <form method='POST'>
        <div class="form-group text-center">
        <label for="number">Select a number</label>
        <select class="form-control mr-5" name='list' id='select' style="width:auto;">
        <?php
            $listOfNumber = [0,1,2,3,4,5,6,4,7,8,9,10,11,12];
            foreach($listOfNumber as $value){
                echo "<option class='text-center' value=".$value.">". $value." </option><br>";
            }
        ?>
        </select>
        <button type="submit" name='submit' class="btn btn-primary mt-1">Submit</button>
        </div>
        <p></p>
    </form>


    <?php 
    if(isset($_POST['submit'])){
        $value = $_POST['list'];    
        $n = [0,1,2,3,4,5,6,4,7,8,9,10,11,12];
        $listOfNumber = [0,1,2,3,4,5,6,4,7,8,9,10,11,12];
        $result = 0;

    echo " <ul class='list-group text-center'>";
        foreach($listOfNumber as $n){
            $result = $n*$value;
            echo "<li class='list-group-item text-center border-0'>$n x $value = $result</li><br>";
        }
    echo "</ul>";
    } 
    ?>  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>