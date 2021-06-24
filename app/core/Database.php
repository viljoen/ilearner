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
class Database {

    //Properties
    /* protected static $dbHost = 'localhost';
      protected static $dbUser = 'root';
      protected static $dbPass = '';
      protected static $dbName = 'ilearner'; */

    protected static $host = 'localhost';
    protected static $db = 'ilearner';
    protected static $user = 'root';
    protected static $pass = '';

    //Methods

    /* protected static function connect()
      {
      $dsn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
      $pdo = new PDO($dsn, $this->dbUser, $this->dbPass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
      } */

    protected static function connect() {
        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            $conn = new PDO($dsn, $user, $pass, $options);

            if ($conn) {
                echo "Connected to the $db database successfully!";
            }
        } catch (PDOException $e) {
            echo "Connection failed reason:" . $e->getMessage();
        }
    }

}
