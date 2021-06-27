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
    
    public static function CreateView($viewName) {

        require_once('../app/views/' . $viewName . '.php');
        //echo 'Controller Static View Created';
    }

    public static function loadHeader() {
        require_once('../app/views/header.php');
    }

    public static function loadFooter() {
        require_once('../app/views/footer.php');
    }

    public static function loadScripts() {
        require_once('../app/views/scripts.php');
    }
    
    public static function startSession() {
        require_once('../app/core/Session.php');
    }

    public static function loadCss(){
        $css = glob("../css/learn.css", GLOB_BRACE);
        foreach ($css as $cssname) {
            echo "<link rel='stylesheet' href='$cssname'><br>";
        }
        
        }
    
    public static function loadMlCss(){
        $css = glob("../css/material.min.css", GLOB_BRACE);
        foreach ($css as $cssname) {
            echo "<link rel='stylesheet' href='$cssname'><br>";
        }
        
        }
    
    public static function loadJs(){
        $js = glob("../js/learn.js", GLOB_BRACE);
        foreach ($js as $jsname) {
            echo "<link rel='stylesheet' href='$jsname'><br>";
        }
        
        }
    
    public static function loadMlJs(){
        $js = glob("../js/material.min.js", GLOB_BRACE);
        foreach ($js as $jsname) {
            echo "<link rel='stylesheet' href='$jsname'><br>";
        }
        
        }    
        

}
