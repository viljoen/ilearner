<?php
//NB this to be moved to the signup controller

/**
 * @param $required_field_array, n array containing the list of all required fields
 * @return array, containing all the errors
 */

function check_empty_fields($required_fields_array){
    //initialize an array to store any error messages
    $form_errors = array();

    //loop through the required fields array
    foreach ($required_fields_array as $name_of_field) {
        if (!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL) {
            $form_errors[] = $name_of_field ." is a required field";
        }
    }
    return $form_errors;
}

/**
 * @param $fields_to_check_length, an array containing the name of the fields
 * for which we want to check min required length e.g. array ('username' => 4, 'email' => 12)
 * @return array, containing all errors
 */

function check_min_length($fields_to_check_length){
        //initialize an array to store any error messages
    $form_errors = array();

    //loop through the required fields array
    foreach ($fields_to_check_length as $name_of_field => $minimum_length_required) {
    if (strlen(trim($_POST[$name_of_field])) <$minimum_length_required) {
            $form_errors[] = $name_of_field ." is too short, must be {$minimum_length_required} characters long";
        }
    }
    return $form_errors;
}

/**
 * @param $data, store a key/value pair array where key is the name of the form control
 * in this case 'email and the is the input entered by the user
 * @return array, containing email error
 */
function check_email($data){
    //initialize array to store error messages
    $form_errors = array();
    $key = 'username';
    //check if key mail exists in the data array
    if(array_key_exists($key, $data)){
        //check if the email field has a value
        if($_POST[$key] != NULL){
            //remove all illegal characters from email address
            $key = filter_var($key, FILTER_SANITIZE_EMAIL);
            //check if input is a valid email address
            if(filter_var($_POST[$key],FILTER_VALIDATE_EMAIL) === false){
                $form_errors[] = $key . "is not a valid email address";
            }
        }
    }
    return $form_errors;
}

/**
 * @param $form_errors_array, the array holding all
 * errors which we want to loop through
 * @return string, list of containing all error messages
 */

function show_errors($form_errors_array){
    $errors = "<p><ul style='color: red;'>";
    
    //loop through error array and display all items in a list
    foreach($form_errors_array as $the_error){
        $errors .="<li>{$the_error}</li>";
    }
    $errors .="</ul></p>";
    return $errors;
 }
 
 /**
  * 
  * @param type $message
  * @param type $passfail
  * @return type
  */
 function userMessage($message,$passfail = "Fail"){
     if($passfail === "Pass"){
         $data = "<p style='padding: 20px; border:1px solid gray; color: green;'>{$message}</p>";
     }else{
         $data = "<p style='padding: 20px; border:1px solid gray; color: red;'>{$message}</p>";
     }
     return $data;
 }
 
 /**
  * 
  * @param type $page
  */
 function redirectTo($page){
     header("Location: http://localhost/ilearner/public/{$page}");            
 }
 
 /**
  * 
  * @param type $value
  * @param type $conn
  * @return boolean
  */
 function checkDuplicateUsername($value, $conn){
     try {
         $sqlQuery = "SELECT emailAddress FROM users WHERE emailAddress =:username";
         $statement = $conn->prepare($sqlQuery);
         $statement->execute(array(':username' => $value));
         
         if($row = $statement->fetch()){
             return true;
         }
         return false;
     }catch (PDOException $ex){
         //handle exception
     }
 }
 /**
  * Try to fix these to work universaly
  * @param type $table
  * @param type $column_name
  * @param type $value
  * @param type $conn
  * @return boolean
  
 function checkDuplicateEntries($table, $column_name, $value, $conn){
     try {
         $sqlQuery = "SELECT * FROM " .$table. " WHERE " .$column_name. " = $form_field";
         $statement = $conn->prepare($sqlQuery);
         $statement->execute(array(':'$form_field => $value));
         
         if($row = $statement->fetch()){
             return true;
         }
         return false;
     }catch (PDOException $ex){
         //handle exception
     }
 }*/
 
 /**
  * Set cookie parameter
  * @param type $userId
  */
 function rememberMe($userId){
     $encryptCookieData = base64_encode("UaQteh5i4y3dntstemYODA($userId)");
     // Cookie set to expire in about 30 days
     setcookie("rememberUserCookie", $encryptCookieData, time()+60*60*24*100,"/");
 }
 
 /**
  * 
  * @param type $conn
  * @return boolean
  */
 function isCookieValid($conn){
     $isValid = false;
     
     if (isset($_COOKIE['rememberUserCookie'])){
         
      // Decode user data
     $decryptCookieData = base64_decode($_COOKIE['rememberUserCookie']);
     $userId = explode("UaQteh5i4y3dntstemYODA", $decryptCookieData);
     $user_id = $userId[1];
     
     //checck if id exists in the database
     $sqlQuery = "SELECT * FROM users WHERE userId = :id";
     $statement = $conn->prepare($sqlQuery);
     $statement->execute(array(':id' => $user_id));
     
     if($row = $statement->fetch()){
         $id = $row['id'];
         $username = $row['username'];
         
         //create a user session variable
         $_SESSION['id'] = $id;
         $_SESSION['username'] = $username;
         $isValid = true;
     }else {
         //cookie ID is valid destroy session
         $isValid = false;
         signout();
     }
     
     }
     return $isValid;
 }
 /**
  * 
  */
 function signout(){
     unset($_SESSION['username']);
     unset($_SESSION['id']);
     
     if(isset($_COOKIE['rememberUserCookie'])){
         unset($_COOKIE['rememberUserCookie']);
         setcookie('rememberUserCookie', null, -1, '/');
     }
     session_destroy();
     /*session_regenerate_id(true);*/
     redirectTo('index');
 }
 
 /**
  * 
  * @return boolean
  */
 function sessionTimer(){
     $isValid = true;
     $inactive = 60 * 2; //2 mins
     $fingerprint = md5($_SERVER['REMOTE_ADDR'] .$_SERVER['HTTP_USER_AGENT']);
     
     if ((isset($_SESSION['fingerprint']) && $_SESSION['fingerprint'] != $fingerprint)){
         $isValid = false;
         signout();
     }elseif ((isset ($_SESSION['last_active']) && (time() - $_SESSION['last_active']) > $inactive) &&$_SESSION['username']) {
        $isValid = false;
        signout();
    }else{
        $_SESSION['last_active'] = time();
    }
    
    return  $isValid;
 }