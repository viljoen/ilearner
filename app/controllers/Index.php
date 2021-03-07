<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Marketing
 *
 * @author Clive Viljoen <viljoenc@viljoentechnologies.com>
 */
class Index extends Controller {
    
    public static function test (){
        print_r(self::query('SELECT * FROM users'));
    }
}
