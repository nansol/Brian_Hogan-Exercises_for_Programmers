<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Troubleshooting Car Issues</title>
</head>
<body>


<?php 

    function start(){
        echo "<p>Is the car silent when you turn the key?</p>";
        echo "<select name='silent'>
                <option value='yes'>Yes</option>
                <option value='no'>No</option>
              </select>
              <br>     
             <input type='submit' name='start'>";
    }

    function silentTurnKey(){
        if(isset($_POST['start'])){
            if(($_POST['silent']  == 'yes')){
                echo "<p>Are the battery terminals corroded?</p>";
                echo "<select name='battery'>
                        <option value='yes'>Yes</option>
                        <option value='no'>No</option>
                    </select>
                    <br>     
                    <input type='submit' name='submit'>";
            }
            else{
               echo "<p>Does the car make a clicking noise?</p>";
                echo "<select name='clickingNoise'>
                        <option value='yes'>Yes</option>
                        <option value='no'>No</option>
                    </select>
                    <br>     
                    <input type='submit' name='click'>";
            }
        }
    }

    function batteryCorroded(){
        if(isset($_POST['submit'])){
            if(($_POST['battery']  == 'yes')){
                echo "<p>Clean terminals and try starting again</p>";
            }
            else{
               echo "<p>Replace cables and try again.</p>";
            }
        }
    }
    
    function clickingNoise(){
        if(isset($_POST['click'])){
            if(($_POST['clickingNoise']  == 'yes')){
                echo "<p>Replace the battery</p>";
            }
            else{
                echo "<p>Does the car crank up but fail to start?</p>";   
                echo "<select name='crankUp'>
                        <option value='yes'>Yes</option>
                        <option value='no'>No</option>
                    </select>
                    <br>     
                    <input type='submit' name='crank'>";
            }
        }
    }

    function crankUp(){
        if(isset($_POST['crank'])){
            if(($_POST['crankUp']  == 'yes')){
                echo "<p>Check spark plug connections</p>";  
            }
            else{
                echo "<p>Does the engine start and then die?</p>";   
                echo "<select name='startDie'>
                        <option value='yes'>Yes</option>
                    </select>
                    <br>     
                    <input type='submit' name='engineStart'>";
            }
        }
    }

    function startDie(){
        if(isset($_POST['engineStart'])){
            if(($_POST['startDie']  == 'yes')){
                echo "<p>Does your car have fuel injection?</p>";  
                echo "<select name='fuel'>
                        <option value='yes'>Yes</option>
                        <option value='no'>No</option>
                      </select>
                      <br>     
                      <input type='submit' name='fuelInject'>";        
            }
        }
    }

    function fuel(){
        if(isset($_POST['fuelInject'])){
            if(($_POST['fuel']  == 'yes')){
                echo "<p>Get it in for service.</p>";  
            }
            else{
                echo "<p>Check to ensure the choke is opening and closing.</p>";  
            }
        }
    }

?>

    
</body>
</html>