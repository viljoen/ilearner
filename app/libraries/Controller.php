<?php

/* 
load the model and the view
 */

class Controller {
    public function model($model){
        //require model file
        require_once '../app/models/' . $model . '.php';
        //instantiate model
        return new $model();
    }
    //loads the view
    public function view($view, $data = []) {
        //check for the views file
        if(file_exists('../app/views/' . $view . '.php')){
            //if the file exists
            require_once '../app/views/' . $view . '.php';
        }
        else {
            die("View does not exist.");
        }
        
    }
}

