<?php
include "sql.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>URL Shortener</title>
</head>
<body>
    <header class='container'>
        <h1>Url Shortener</h1>
    </header>
    <div class='container'>
        <form method="GET">
            <input type="url" name='url'placeholder='Add URL' required>
        </form>
    </div>
    <?php
    if(isset($_GET['url'])){
        $urlInput = $_GET['url'];
        $shuffle = str_shuffle($urlInput);
        $urlShort = "nan.cy/".substr($shuffle, -4);





}
    ?>
</body>

</html>