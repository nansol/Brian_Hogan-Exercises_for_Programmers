<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area of a Rectangular Room</title>
</head>
<body>
    <div class='container'>
    <h1>Area of a Rectangular Room</h1>
        <form action="" method='POST'>
            <input type="number" name='length' placeholder='Lenght' id='length'required>
            <input type="number" name='width' placeholder='Width' id='width' required>
            <input type="submit" name='submit'>              
        </form>

        <?php   

        if(isset($_POST['submit'])){

        $area = $_POST['length'] * $_POST['width'];
        $meter = $area * 0.09290304;

        $areaMeter = number_format($meter,3 );

        echo "You entered dimensions of " . $_POST['length'] . " feet by " . $_POST['width'] . " feet.";
        
        echo "<br>";
 
        echo "The area of a room is " . $area . " square feet or " .  $areaMeter . " square meters."; 

        }
        ?>
    	<br>

    </div>



    <!-- Challenge 
    • Revise the program to ensure that inputs are entered as numeric values. Don’t allow the user to proceed if the value entered is not numeric.
    • Create a new version of the program that allows you to choose feet or meters for your inputs.
    • Implement this program as a GUI program that automatically updates the values when any value changes.
    -->

    <form method='POST'>
        <select name="dimension">
            <option value="feets" name='feet'>feet</option>
            <option value="meters" name='meters'>meters</option>
        </select>
        <input type="number" name='length' placeholder='Lenght' id='length'required>
        <input type="number" name='width' placeholder='Width' id='width' required>
        <input type="submit" name='sub'>              
    </form>

    <?php   
    $selectOption = $_POST['dimension'];
    $meter = 'meters';

    if(isset($_POST['sub']) && $selectOption == $meter){

        echo "You entered dimensions of " . $_POST['length'] . " meters by " . $_POST['width'] . " meters.";
    
        $area = $_POST['length'] * $_POST['width'];
    
        echo "<br>";
    
        echo "The area of a room is " . $area . " square metters"; 
    
        }
    
        elseif (isset($_POST['sub']) && $selectOption !== $meter){
    
        echo "You entered dimensions of " . $_POST['length'] . " feet by " . $_POST['width'] . " feet.";
    
        $area = $_POST['length'] * $_POST['width'];
    
        echo "<br>";
    
        echo "The area of a room is " . $area . " square feet"; 
    
        }
?>
    
</body>
</html>