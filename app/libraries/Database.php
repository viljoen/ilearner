<?php
/* 
 */

class Database {
    private $dbHost = 'localhost:8889';
    private $dbUser = 'root';
    private $dbPass = 'root';
    private $dbName = 'ilearner';
    

    private $pdo;

    
    public function __contruct (){
        $dsn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
        $options = array(
            //preventing driver timeouts when we are attempting to connect to the database, will also check if there is alreayd a connection with the database
          PDO::ATTR_PERSISTENT => true, 
            //Way to handle errors
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION  
        );
        try {
            //creating and instance and setting pdo error mode to exception
            $this->pdo = new PDO($dsn, $this->dbUser, $this->dbPass, $options);
            
            //display success message
            echo "Connected to the ilearner database";
        }
        catch (PDOException $e){
            $this->error = $e->getMessage();
            //display error message
            echo "Connection failed, reason:".$this->error;
        }
    }  
}
?>