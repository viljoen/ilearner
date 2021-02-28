<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Pages extends Controller {
    public function __construct() {
        //For testing to see that the page loads remove the slashes from the line below
        //echo "Page Controller Loaded";
        //loading the user model
        $this->userModel = $this->model('User');
        
        
    }
    
    public function index() {
        $users = $this->userModel->getUsers();
        //testing passing data
        $data = [
            'title' => 'Home Page Starting Point',
            'users' => $users
        ];
        //echo 'Pages Index Loaded';
        $this->view('pages/index', $data);
        
    }
     public function profile() {
        //echo 'Pages Profile Loaded';
        $this->view('pages/profile'); 
     }    
     public function login() {
        //echo 'Pages login Loaded';
        $this->view('pages/login'); 
     }     
     public function logout() {
        //echo 'Pages logout Loaded';
        $this->view('pages/logout'); 
     }      
     public function signup() {
        //echo 'Pages sinup Loaded';
        $this->view('pages/signup'); 
     }      
}


