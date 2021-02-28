<?php
/* 
 */

$dbHost = 'localhost:8889';
$dbUser = 'root';
$dbPass = 'root';
$dbName = 'ilearner';
    
 
    

$dsn = 'mysql:host=' . $dbHost . ';dbname=' . $dbName;
$options = array(
            //preventing driver timeouts when we are attempting to connect to the database, will also check if there is alreayd a connection with the database
          PDO::ATTR_PERSISTENT => true, 
            //Way to handle errors
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION  
        );
try {
     //creating and instance and setting pdo error mode to exception
     $dbhandler = new PDO($dsn, $dbUser, $dbPass, $options);
            
            //display success message
            echo "Connected to the ilearner database";
        }
catch (PDOException $e){
            $error = $e->getMessage();
            //display error message
            echo "Connection failed, reason:".$error;
        } 