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
    <title>Flickr Photo Search </title>
</head>
<body>
    <header class='container'>
        <h1>Flickr Photo Search</h1>
        <a href=""></a>
    </header>
    <form method="GET">
        <input type="text" name='tag' placeholder="Photos, people or groups">
    </form>
    <?php
    if(isset($_GET['tag'])){
        $tag = $_GET['tag'];
        $url = file_get_contents("https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key=e9f40d8d766ea3b570f07debfd7c2844&tags=.'$tag'.&format=json&nojsoncallback=1");
        $api = json_decode($url, true);
        $pictures = $api['photos']['photo'];

  
        foreach($pictures as $photo){
            echo 
            '<div class="gallery">
              <img class="link" src="http://farm'.$photo['farm'].'.staticflickr.com/'.$photo['server'].'/'.$photo['id'].'_'.$photo['secret'].'_t.jpg">
            </div>';


        }
        
    }
    ?>
    
</body>
</html>