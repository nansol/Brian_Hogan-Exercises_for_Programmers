<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Karvonen Heart Rate</title>
</head>
<body>
    <header class="container">
        <div class='row text-center'>
            <div class='col mt-5'>
                <h1>Karvonen Heart Rate</h1>
            </div>
        </div>
    </header>
    <form method="POST">
        <input type="number" name='age'min="1" placeholder="Enter your age" required>
        <br>
        <input type="number" name='rate' min="1" placeholder="Enter your resting heart rate" required>
        <br>
        <input type="submit" name="submit">
    </form>


</body>
</html>