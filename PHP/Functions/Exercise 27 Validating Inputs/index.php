<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Validating Inputs</title>
</head>
<body>
    <header class="container">
        <h1>Validating Inputs</h1>
    </header>
    <div class='container'>
         <form method='POST'>
            <input type="text" name='name' pattern="[A-Za-z]{2,}" placeholder='Enter your first name'required>  
            <br>
            <input type="text" name='surname' pattern="[A-Za-z]{2,}" placeholder='Enter your last name'required>  
            <br>
            <input type="text" name='id' pattern="[A-Z]{1}[A-Z]{1}\-{1}[0-9]{4}" placeholder='Enter your employee ID'required>  
            <br>
            <input type="number" name='zip' placeholder='Enter your ZIP code'required>  
            <br>
            <input type="submit" name='submit'>
            <br>
        </form>
    </div>  



    
</body>
</html>