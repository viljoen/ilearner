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
    else if(file_exists('.../public/js/' . $class_name . '.js')) {
        include ('.../public/js/' . $class_name . '.js');
    }  
    
});

//
Route::set('index.php',function(){
    //echo 'Index.php';
    //calling the marketing controller
    Index::CreateView('index');
    Index::loadCss();
    Index::loadJs();
    
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

    
});

Route::set('forgotpassword',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Login::CreateView('forgotpassword');
    Index::loadCss();
    Index::loadJs();
    Index::loadHeader();
    Index::loadFooter();
    
});

Route::set('vendorDashboard',function(){
    //echo 'Marketing';
    //calling the marketing controller
    VendorDashboard::loadHeader();
    VendorDashboard::loadCss();
    VendorDashboard::CreateView('vendorDashboard');
    VendorDashboard::loadJs();
    VendorDashboard::loadScripts();
    VendorDashboard::loadFooter();
        
        
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
    Courses::CreateView('courses');
    Courses::loadCss();
    Courses::loadJs();
    Courses::loadHeader();
    Courses::loadFooter();
});

Route::set('courselisting',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Courses::CreateView('courselisting');
    Courses::loadCss();
    Courses::loadJs();
    Courses::loadHeader();
    Courses::loadFooter();
});

Route::set('coursemessenger',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Courses::CreateView('coursemessenger');
    Courses::loadCss();
    Courses::loadJs();
    Courses::loadHeader();
    Courses::loadFooter();
});

Route::set('coursemessengermessage',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Courses::CreateView('coursemessengermessage');
    Courses::loadCss();
    Courses::loadJs();
    Courses::loadHeader();
    Courses::loadFooter();
});

Route::set('courseadd',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Courses::CreateView('courseadd');
    Courses::loadCss();
    Courses::loadJs();
    Courses::loadHeader();
    Courses::loadFooter();
});

Route::set('users',function(){
    //echo 'Marketing';
    //calling the marketing controller
    User::CreateView('users');
    User::loadCss();
    User::loadJs();
    User::loadHeader();
    User::loadFooter();
});

Route::set('learning',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Learning::CreateView('learning');
    Learning::loadCss();
    Learning::loadJs();
    Learning::loadHeader();
    Learning::loadFooter();
});


Route::set('ecommerce',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Ecommerce::CreateView('ecommerce');
    Ecommerce::loadCss();
    Ecommerce::loadJs();
    Ecommerce::loadHeader();
    Ecommerce::loadFooter();
});

Route::set('messenger',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Messenger::CreateView('messenger');
    Messenger::loadCss();
    Messenger::loadJs();
    Messenger::loadHeader();
    Messenger::loadFooter();
});

Route::set('profile',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Profile::loadHeader();
    Profile::loadCss();
    Profile::loadMlCss();
    Profile::CreateView('profile');
    Profile::loadJs();
    Profile::loadMlJs();
    Profile::loadFooter();
    
    
});

Route::set('profileedit',function(){
    //echo 'Marketing';
    //calling the marketing controller
    Profile::CreateView('profileedit');
    Profile::loadCss();
    Profile::loadMlCss();
    Profile::loadJs();
    Profile::loadMlJs();
    Profile::loadHeader();
    Profile::loadFooter();
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
