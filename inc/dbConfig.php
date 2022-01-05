<?php


session_start();

const db_host = 'stampmaker.ciyq4ufpar8z.us-east-1.rds.amazonaws.com'; //old DB
// //  $db_host = 'aa100xgok1nbrz5.ciyq4ufpar8z.us-east-1.rds.amazonaws.com'; //production DB 
const db_name = 'stampmaker';
const db_username = 'admin';
const db_password = 'admin12345';
const port = 'admin12345';
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
// function consoleLog($msg) {
//   echo '<script type="text/javascript">' .
//     'console.log(' . $msg . ');</script>';
// }

// consoleLog('inc dbConfig php');
?>
