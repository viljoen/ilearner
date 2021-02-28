<?php


/* 
Good practise to have your model singular e.g. User and your controllers plural e.g. Users
 */


class User{

    public function __construct() {
       
        $this->pdo = new Database();
    }
   
            
    public function getUsers() {
  
        }
    
}