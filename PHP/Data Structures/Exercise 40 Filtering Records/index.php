


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Filtering Recoreds</title>
</head>
<body>
    <header class='container'>
        <h1>Filtering Records</h1>
    </header>
    <form> 
	    Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
	    </form>
	    <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
    <script src='index.js'></script>
</body>
</html>