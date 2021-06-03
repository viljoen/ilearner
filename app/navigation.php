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
  else if(file_exists('../app/models/' . $class_name . '.php')) {
        include ('../app/models/' . $class_name . '.php');
    }
  else if(file_exists('../app/views/' . $class_name . '.php')) {
        include ('../app/views/' . $class_name . '.php');
    }      
    
});

//
Route::set('index.php',function(){
    //echo 'Index.php';
    //calling the marketing controller
    Index::CreateView('index');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
    
});


Route::set('studentsignup',function(){
    //echo 'Marketing';
    //calling the marketing controller
    StudentSignup::CreateView('studentsignup');
});

Route::set('signup',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorSignup::CreateView('signup');
});

Route::set('login',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Login::CreateView('login');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});


Route::set('vendorDashboard',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::CreateView('vendorDashboard');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('notifications',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::CreateView('notifications');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('wizards',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::CreateView('wizards');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('dbtablecreate',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::CreateView('dbtablecreate');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('programmes',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::CreateView('programmes');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('courses',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::CreateView('courses');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('courselisting',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::CreateView('courselisting');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('coursemessenger',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::CreateView('coursemessenger');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('coursemessengermessage',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::CreateView('coursemessengermessage');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('courseadd',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::CreateView('courseadd');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('users',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::CreateView('users');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('learning',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::CreateView('learning');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});


Route::set('ecommerce',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Ecommerce::CreateView('ecommerce');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('messenger',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Ecommerce::CreateView('messenger');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('profile',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Ecommerce::CreateView('profile');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
});

Route::set('logout',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Logout::CreateView('logout');
});

Route::set('studentDashboard',function(){
    //echo 'Marketing';
    //calling the marketing controller
    StudentDashboard::CreateView('studentDashboard');
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
