<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<header>
        <h1>Who said this quote?</h1>
    </header>
    <section>
        <?php
            $quote="These aren't the droids you're looking for.";
            $author = "Obi-Wan Kenobi";

            echo "<h2>$quote</h2>";
        ?>
            <form action="" method="POST">
                <label for="author">Who said it?</label>
                <input type="text" name="author">
            </form>
    </section>
    <section>
        <?php
            if(isset($_POST['author']) == $author){
                echo "Correct!!!";

                echo "<br>";

                echo $author . " says: " . " \"	$quote \"	";
            } 
            else
            {
                echo "Incorrect! Try again";
            }
        ?>
    </section>
</body>
</html>