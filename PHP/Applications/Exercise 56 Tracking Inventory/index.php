<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Tracking Inventory</title>
</head>
    <header>
        <h1>Tracking Inventory</h1>
    </header>
<body>
    <form method="POST">
        <input type="text" name='name' placeholder="Name" required>
        <br>
        <input type="number" name='serialNum' step="1" placeholder="Serial Number" required>
        <br>
        <input type="text" name='value' placeholder="Value" required>
        <br>
        <label for="image">Inventory Image</label>
        <input type="file" name='image'>
        <br>
        <input type="submit" name='submit'>
    </form>
</body>
</html>