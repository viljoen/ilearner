<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Application
 *
 * @author Clive Viljoen <viljoenc@viljoentechnologies.com>
 */

namespace app\core;

class Application {
    public Router $router;
    public function __contruct() {
        $this->router = new Router();
    }
}
