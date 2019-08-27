<?
include "index.php";
include "sql.php";

function redirect($urlShort){

    $servername = "localhost";
    $username = "root";
    $password = "rootroot";
    $dbname = "urlshortener";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT urlInput, id FROM url WHERE urlShort = '$urlShort'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        header('Location:'.$row['urlIntput']);
    }
    $conn->close();
}

   echo redirect();
?>