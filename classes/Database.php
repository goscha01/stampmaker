<?php
class Database
{
    private $db_host = 'stampmaker.ciyq4ufpar8z.us-east-1.rds.amazonaws.com'; //old DB
    // //  $db_host = 'aa100xgok1nbrz5.ciyq4ufpar8z.us-east-1.rds.amazonaws.com'; //production DB 

    private $db_name = 'stampmaker';
    private $db_username = 'admin';
    private $db_password = 'admin12345';
    private $port = 'admin12345';

    public function dbConnection()
    {
    
       

        try {
            $conn = new PDO('mysql:host=' . $this->db_host . ';port=' . $this->port . ';dbname=' . $this->db_name, $this->db_username, $this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
            return $conn;
        } catch (PDOException $e) {
            echo "Connection error " . $e->getMessage();
            exit;
        }
            consoleLog('classes Database php');
        

        
    }

    function consoleLog($msg) {
        echo '<script type="text/javascript">' .
          'console.log(' . $msg . ');</script>';
    }
    
    
}
