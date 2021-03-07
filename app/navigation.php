<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

spl_autoload_register(function ($class_name){
    if(file_exists('../app/core/' . $class_name . '.php')){
    include ('../app/core/' . $class_name . '.php');
    }
 else if(file_exists('../app/controllers/' . $class_name . '.php')) {
        include ('../app/controllers/' . $class_name . '.php');
    }
    
});

//
Route::set('marketing',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Marketing::CreateView();
});

Route::set('studentsignup',function(){
    //echo 'Marketing';
    //calling the marketing controller
    StudentSignup::CreateView();
});

Route::set('signup',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorSignup::CreateView();
});

Route::set('login',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Login::CreateView();
});

Route::set('logout',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Logout::CreateView();
});

Route::set('vendorDashboard',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::CreateView();
});

Route::set('studentDashboard',function(){
    //echo 'Marketing';
    //calling the marketing controller
    StudentDashboard::CreateView();
});








// Simple test route that simulates static html file
Route::set('/test.html',function(){
    echo 'Hello from test.html';
});

// Post route example
Route::set('/contact-form',function(){
    echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
},'get');

// Post route example
Route::set('/contact-form',function(){
    echo 'Hey! The form has been sent:<br/>';
    print_r($_POST);
},'post');

// Accept only numbers as parameter. Other characters will result in a 404 error
Route::set('/foo/([0-9]*)/bar',function($var1){
    echo $var1.' is a great number!';
});

//Route::run('/');
