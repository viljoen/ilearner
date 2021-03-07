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
    public static $dbHost = 'localhost:8889';
    public static $dbUser = 'root';
    public static $dbPass = 'root';
    public static $dbName = 'ilearner';
        
    private static function connect()
    {
        $dsn = 'mysql:host=' . self::$dbHost . ';dbname=' . self::$dbName;
        
        $options = array(
            //preventing driver timeouts when we are attempting to connect to the database, will also check if there is alreayd a connection with the database
          PDO::ATTR_PERSISTENT => true,
            //Way to handle errors
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try {
            //creating and instance and setting pdo error mode to exception
            $dbhandler = new PDO($dsn, self::$dbUser, self::$dbPass, $options);
            
            //display success message
            echo "You have successfully connected to the ilearner database!";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            //display error message
            echo "Connection failed, reason:".$error;
        }
       
       
        //$pdo = new PDO('mysql:host=127.0.0.1;dbname=howCode;charset=utf8', 'root', '');
    //$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //return $pdo;
    }

    public static function query($query, $params = array())
    {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        if (explode(' ', $query)[0] == 'SELECT') {
            $data = $statement->fetchAll();
            return $data;
        }
    }
}
