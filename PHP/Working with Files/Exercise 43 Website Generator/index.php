<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Website Generator</title>
</head>
<body>
    <header class='container'>
        <h1>Website Generator</h1>
    </header>
    <div class='container'>
        <form method="POST">
            <input type="text" name='name' placeholder='Site name' required>
            <br>
            <input type="text" name='author' placeholder='Site author' required>
            <br>
            <label for="js">Do you want a folder for JavaScript?</label>
            <input type="radio" name='js' value='yes'>YES
            <input type="radio" name='js' value='no' >NO
            <br>
            <label for="js">Do you want a folder for CSS?</label>
            <input type="radio" name='css' value='yes'>YES
            <input type="radio" name='css' value='no'>NO
            <br>
            <input type="submit" name='submit'>
        </form>
    </div>

 
    
</body>
</html>