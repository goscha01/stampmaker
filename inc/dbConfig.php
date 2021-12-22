<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stampMaker";

$conn = new mysqli("stampmaker.ciyq4ufpar8z.us-east-1.rds.amazonaws.com", "admin", "admin12345", "stampmaker","3306");

$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';

function CheckIfAdmin(){
    if(isset($_SESSION['uid'])){
     if($_SESSION['role']!="admin"){
         header("location:index.php");
     }
}
if(!isset($_SESSION['uid'])){
      header("location:index.php");
}

}

?>
