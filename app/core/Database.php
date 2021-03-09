<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author Clive Viljoen <viljoenc@viljoentechnologies.com>
 */
class Database
{
    //Properties
    protected static $dbHost = 'localhost:8890';
    protected static $dbUser = 'root';
    protected static $dbPass = 'root';
    protected static $dbName = 'ilearner';
    
    //Methods
      
    protected static function connect()
    {
        $dsn = 'mysql:host=' . $dbHost . ';dbname=' . $dbName;
        
        $options = array(
            //preventing driver timeouts when we are attempting to connect to the database, will also check if there is alreayd a connection with the database
          PDO::ATTR_PERSISTENT => true,
            //Way to handle errors
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $pdo = new PDO($dsn, $dbUser, $dbPass, $options);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
        
       //try 
       //{
            //creating and instance and setting pdo error mode to exception
       // $dbhandler = new PDO($dsn, self::$dbUser, self::$dbPass, $options);
            
            //display success message
       //  echo "You have successfully connected to the mysql server!";
      // } 
      // catch (PDOException $e) 
       //{
       
       // $error = $e->getMessage();
            //display error message
        //echo "Connection failed, reason:".$error;
      //}
    } 

 
}