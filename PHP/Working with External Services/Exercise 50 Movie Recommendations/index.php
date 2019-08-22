<?php
require "api.php";




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
        <input type="text" name="search" placeholder="title, artist, director"> 
    </form>
    <?php
    if(isset($_GET['search'])){
        $search = $_GET['search'];


        $link = file_get_contents("https://api.themoviedb.org/3/search/multi?include_adult=false&page=1&language=en-US&api_key=f9e9438604faec2c545a1d71f3134e3a&query=.'$search'.");
                                  

        $url = json_decode($link,true);
        
        //print_r($url);
        foreach($url['results'] as $key=>$value){
           $pic = $value['poster_path'];
            echo 
            '<div class="gallery">
              <img class="link" src="https://image.tmdb.org/t/p/w500/.$pic.jpg">
            </div>';   
         echo $value['title'].'<br>';
         echo $value ['release_date'].'<br>';
         echo "Plot: ". $value ['overview'].'<br>';


        }
        


       
    }
    
    
    ?>
    
</body>
</html>