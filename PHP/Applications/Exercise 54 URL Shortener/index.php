<?php
include "sql.php";


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySql '. mysqli_connect_errno();
} 
$query = 'SELECT * FROM url';
$result = mysqli_query($conn, $query);

$list = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

array_multisort($list);

foreach($list as $key => $value){
    if($_SERVER['REQUEST_URI'] == $value['urlShort'])
     {
        echo "TEST";
    }
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>URL Shortener</title>
</head>
<body>
    <header class='container'>
        <h1>Url Shortener</h1>
    </header>
    <div class='container'>
        <form method="GET">
            <input type="url" name='url'placeholder='Add URL' required>
        </form>
    </div>
    <?php
    if(isset($_GET['url'])){
        $urlInput = $_GET['url'];
        $shuffle = str_shuffle($urlInput);
        $urlShort = "www.nan.cy/".substr($shuffle, -4);

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM url WHERE urlInput = '$urlInput'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0)
        {
            echo "The URL is already in the database";
        }
        else{
            $sql = "INSERT INTO url (urlInput, urlShort)
            VALUES ('$urlInput', '$urlShort')";
        
            if ($conn->query($sql) === TRUE) {
                echo $urlShort;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        $conn->close();    

    }


        
    

    ?>
</body>

</html>