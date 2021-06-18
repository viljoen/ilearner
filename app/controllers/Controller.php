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
        $css = glob("../css/learn.css", GLOB_BRACE);
        foreach ($css as $cssname) {
            echo "<link rel='stylesheet' href='$cssname'>";
        }
        
        }
    
    public static function loadJs(){
        $js = glob("../js/learn.jss", GLOB_BRACE);
        foreach ($js as $jsname) {
            echo "<link rel='stylesheet' href='$jsname'>";
        }
        
        }
        
    public static function loadHeader(){
        $head = glob("../app/views/header.php", GLOB_BRACE);
        foreach ($head as $headname) {
            echo "$headname";
        }
        
        }
    
        public static function loadFooter(){
        $foot = glob("../app/views/footer.php", GLOB_BRACE);
        foreach ($foot as $footname) {
            echo "$footname";
        }
        
        }
        
        public static function loadScripts(){
        $scripts = glob("../app/views/scripts.php", GLOB_BRACE);
        foreach ($script as $scriptname) {
            echo "$scriptname";
        }
        
        }  
}
