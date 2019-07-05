<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Printing Quotes</title>
</head>
<body>
    <div class='container'>
        <header>
            <h1 id="title">Who said this quote?</h1>
        </header>
        <section>
            <?php
                $quote="These aren't the droids you're looking for.";
                $author = 'Kenobi';

                echo "<div id='question'>
                        <h2>$quote</h2>
                      </div>";
                
            ?>
                <form action="" method="POST">
                    <input id='input' type="text" name="author" placeholder="Enter your answer">
                </form>
        </section>
        <section>
            <?php
                if(isset($_POST['author']) == $author){

                    echo "<div id='correct'> Correct!!!</div>";

                    echo "<br>";

                    echo 
                    "<div id='quote'>{$author} says: \"	$quote \" </div>";

                    echo 'match';        
                    echo '<br>';
                    echo 'Variable value:'. $author;
                    echo '<br>';
                    echo 'User Input:'. $_POST['author'];

                }

                else {
                    echo "not match";
                    echo '<br>';
                    echo 'Variable value:'. $author;
                    echo '<br>';
                    echo 'User Input: '. $_POST['author'];
                    
                }
            ?>
        </section>
    </div>

</body>
</html>