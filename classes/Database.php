<?php
// include('..\..\Cred\db.config.php');
require_once '../inc/dbConfig.php';

$db_host = $_SERVER['RDS_HOSTNAME'];
$db_name = $_SERVER['RDS_DB_NAME'];
$db_username = $_SERVER['RDS_USERNAME'];
$db_password = $_SERVER['RDS_PASSWORD'];
$port = $_SERVER['RDS_PORT'];


class Database{
    
    // CHANGE THE DB INFO ACCORDING TO YOUR DATABASE
    // private $db_host = 'stampmaker.ciyq4ufpar8z.us-east-1.rds.amazonaws.com'; //old DB
    // private $db_host = 'aa100xgok1nbrz5.ciyq4ufpar8z.us-east-1.rds.amazonaws.com'; //production DB 
    // private $db_name = 'stampmaker';
    // private $db_username = 'admin';
    // private $db_password = 'admin12345';
    // private $port = 'admin12345';



     

    
    public function dbConnection(){
        echo '<script>console.log($db_host)</script>';
        echo '<script>console.log($db_name)</script>';
        echo '<script>console.log($db_username)</script>';
        echo '<script>console.log($db_password)</script>';
        echo '<script> console.log($port)</script>';
        
        
        
       
        try{
        
            $conn = new PDO('mysql:host='.$this->db_host.';port='.$this->port.';dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage(); 
            exit;
        }
          
    }
}