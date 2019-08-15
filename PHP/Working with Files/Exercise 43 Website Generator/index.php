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

 
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $author = $_POST['author'];

        $folder = mkdir($name);

        echo "Site name: ". $name."<br>";
        echo "Author: ". $author."<br>";

        if($_POST['js'] == 'yes'){
           echo "Do you want a folder for JavaScript? answer: YES <br>";
           $myJS = fopen("$name/index.js", "w");
           $js = "";
           fwrite($myJS, $js);
           fclose($myJS);
        }
        
        if($_POST['css'] == 'yes'){
            echo "Do you want a folder for CSS? answer: YES <br>";
            $myCSS = fopen("$name/style.css", "w");
            $css = "";
            fwrite($myCSS, $css);
            fclose($myCSS);
         }

         $myfile = fopen("$name/index.html", "w");
         $index = '<!DOCTYPE html>
         <html lang="en">
         <head>
             <meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <link rel="stylesheet" href="style.css">
             <meta>
             <title> </title>
         </head>
         <body></body>
         </html>';
         fwrite($myfile, $index);
         fclose($myfile);




      /*   // Enter the name of directory 
        $pathdir = "PHP\Working with Files\Exercise 43 Website Generator\{$folder}";  

        // Enter the name to creating zipped directory 
        $zipcreated = "{$folder}.zip"; 

        // Create new zip class 
        $zip = new ZipArchive; 

        if($zip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) { 

        // Store the path into the variable 
        $dir = opendir($pathdir); 

        while($file = readdir($dir)) { 
        if(is_file($pathdir.$file)) { 
        $zip -> addFile($pathdir.$file, $file); 
         } } 
        $zip ->close(); 
        }  */

        }
    ?>         
</body>
</html>