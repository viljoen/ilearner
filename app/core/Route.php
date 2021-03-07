<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Routing
 *
 * @author Clive Viljoen <viljoenc@viljoentechnologies.com>
 */
class Route {
    
    public static $validRoutes = array();
    
    public static function set($route, $function) {
        
        self::$validRoutes[] = $route;
        
        //print_r(self::$validRoutes);
        
        //to ensure that the correct page information is displayed only when the page is accesse
        if ($_GET['url'] == $route){
        $function->__invoke();
        }
        
        
    }

}