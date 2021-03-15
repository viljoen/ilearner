<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Clive Viljoen <viljoenc@viljoentechnologies.com>
 */
class Controller extends Database{
    //Properties
    
    
    
    //Methods
    
    public static function CreateView($viewName){
        
        require_once('../app/views/'. $viewName . '.php');
        //echo 'Controller Static View Created';
    }
            public static function loadCss(){
        $css = glob("https://code.getmdl.io/1.1.3/material.min.css", GLOB_BRACE);
        foreach ($css as $cssname) {
            echo "<link rel='stylesheet' href='$cssname'>";
        }
        
        }
    
}
