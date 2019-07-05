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
        <h1>What is the quote?</h1>
    </header>
    <section>
        <?php
            $quote="These aren't the droids you're looking for";
            $author = "Obi-Wan Kenobi";

            echo "<h2>$quote</h2>";
        ?>
            <form action="" method="POST">
                <label for="author">Who said it?</label>
                <input type="text" name="author">
            </form>
    </section>
    <section>

    </section>
</body>
</html>