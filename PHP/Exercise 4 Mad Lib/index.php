<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Exercise 4 Mad Lib</title>
</head>
<body>
    <div class="container mt-5 mb-5" >
        <div class="row">
            <div class="col">
                <h1 class="text-center">Mad Lib</h1>
            </div>
        </div>
        <form method="POST">
        <div class="form-group row justify-content-center mt-5">
            <label for="pronoun" class="col-sm-2 col-form-label">Enter a pronoun:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="pronoun" name="pronoun" required>
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="noun" class="col-sm-2 col-form-label">Enter a noun:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="noun" name="noun" required>
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="verb" class="col-sm-2 col-form-label">Enter a verb:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="verb" name="verb" required>
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="adjective" class="col-sm-2 col-form-label">Enter an adjective:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="adjective" name="adjective" required>
            </div>
        </div>
        <div class="form-group row justify-content-center ">
            <label for="adverb" class="col-sm-2 col-form-label">Enter an adverb:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="adverb" name="adverb" required>
            </div>
        </div>    
        <div class="form-group row ">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary" name="submit" class=>Submit</button>
            </div>
        </div> 
        </form>
    </div>

    <?php
    $comment = ['That\'s hilarious!', 'Awesome', 'You are funny','Hm, Right'];

    function MadLib(){
       if(isset($_POST["submit"])) {
           return ucfirst($_POST['pronoun']) ." ".$_POST['verb'] ." ". $_POST['noun'] ." ". $_POST['adjective'] ." ". $_POST['adverb'] . ". " ;
       }}
    ?>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>
                    <?php  echo MadLib();?> 
                    <?php  if(isset($_POST["submit"])){
                        echo $comment[array_rand($comment)];
}                   ?> 
                </h2>
            </div>
        </div>
    </div>


            



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

