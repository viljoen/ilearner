<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Router
 *
 * @author Clive Viljoen <viljoenc@viljoentechnologies.com>
 * @package app\core
 */

namespace app\core;

class Router {
    public Request $request;
    protected array $routes = [];
    
    public function __construct(Request $request) {
        $this->request = $request;
    }

       
    public function get ($path,$callback){
        $this->routes['get'][$path] = $callback;
    }
    public function resolve(){
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false){
            echo "Not Found";
            exit;
        }
        echo call_user_func($callback);
    }

}
