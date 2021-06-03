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
    protected static $dbHost = 'localhost';
    protected static $dbUser = 'root';
    protected static $dbPass = '';
    protected static $dbName = 'ilearner';
    
    //Methods
      
    protected static function connect()
    {
        $dsn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->dbUser, $this->dbPass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } 
}
