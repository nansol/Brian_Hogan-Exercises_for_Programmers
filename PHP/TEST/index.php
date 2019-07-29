<?php  
session_start(); 
if(!isset($_SESSION['random'])){  
$_SESSION['random'] = mt_rand(1, 10);  
}  
$random = $_SESSION['random'];  
?>       


<?php echo $random; ?>