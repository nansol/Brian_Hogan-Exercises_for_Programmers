<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Numbers to Names</title>
</head>
<body>
    <header class="container">
        <h1>Numbers to Names</h1>
    </header>
     <div class='container'>
         <form method='POST'>
            <input type="number" name='month'id="month" min="1" placeholder='Please enter the number of the month:'required>  
            <br>
            <input type="submit" name='submit'>
            <br>
        </form>

        <?php
        $monthsInYear =  ['January'=>1, 'February'=>2,'March'=>3,'April'=>4,'May'=>5, 'Jun'=>6,'July'=>7,'August'=>1,'September'=>1, 'October'=>10, 'November'=>11,'December'=>12,];

        if(isset($_POST['submit'])){
            $month = $_POST['month'];
/* 
            foreach($monthsInYear as $key => $value){
                if ($value == $month){
                    echo "The name of the month is " .$key;
                }
            } */


        switch($month){
            case "1":
                echo "The name of the month is January";
                break;
            case "2":
                echo "The name of the month is February";
                break;
            case "3":
                echo "The name of the month is March";
                break;
            case "4":
                echo "The name of the month is April";
                break;
            case "5":
                echo "The name of the month is May";
                break;
            case "6":
                echo "The name of the month is Jun";
                break;
            case "7":
                echo "The name of the month is July";
                break;
            case "8":
            echo "The name of the month is August";
                break;
            case "9":
                echo "The name of the month is September";
                break;
            case "10":
                echo "The name of the month is October";
                break;
            case "11":
                echo "The name of the month is November";
                break;
            case "12":
                echo "The name of the month is December";
                break;
            default:
                echo "Add a number 1 - 12";
                break;
        }

    }



        ?>
</body>
</html>