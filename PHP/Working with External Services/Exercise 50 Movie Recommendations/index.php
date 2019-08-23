<?php
include "api.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Movie Recommendations</title>
</head>
<body>
    <header>
        <h1>Movie Database</h1>
    </header>
    <form method="GET">
        <input type="text" name="search" placeholder="Write a movie title"> 
    </form>
    <?php
    if(isset($_GET['search'])){
        $search = $_GET['search'];


        $link = file_get_contents("https://api.themoviedb.org/3/search/multi?include_adult=false&page=1&language=en-US&api_key=.'$apiKey'.&query=.'$search'.");
                                  

        $url = json_decode($link,true);
        
        //print_r($url);

        foreach($url['results'] as $key=>$value){
           $pic = $value['poster_path'];
        echo '<div class="gallery">';
        if($value['title']){
            echo $value["title"]."<br>";
        }
        if($value['release_date']){
            echo $value ["release_date"]."<br>";
        }
               if($value["overview"]){
             echo   "Plot: ". $value ['overview'].'<br>';
             }
        echo '<img class="link" src="https://image.tmdb.org/t/p/w200/'.$pic.'">';
        echo '</div>';   
           }
   }
    
    
    ?>
    
</body>
</html>