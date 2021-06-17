<?php
//rewatch S02_E06 to fix this page!!!

//add our database connection script
include_once 'testdbconnect.php';
//add our database validation scripts
include_once'vendorsignupisvalid.php';

//process form if the reset button is clicked
if(isset($_POST['reset'])){
//array to hold errors
$form_errors = array();
    
//validate
$required_fields = array('username','new_password', 'confirm_password');

//call function to check empty field and merge returned data
$form_errors = array_merge($form_errors, check_empty_fields($required_fields));

//fields whic need minimum length check
$fields_to_check_length = array('new_password' => 8, 'confirm_password' =>8);


//call the function to check minimum required length and merge the returned data into form_error array
$form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));

//email validation
$form_errors = array_merge($form_errors, check_email($_POST));

if(empty($form_errors)){
    //collect form data
    $email = $_POST['username'];
    $password1 = $_POST['new_password'];
    $password2 = $_POST['confirm_password']
          
    //check if new password and confirm passowrd match
    if($password1 != $password2){
         $result = "<p style='padding:20px;border:1px solid gray; color: red;'>New password and confirm password does not match</p>"
     }else{
         try
         // create SQL select statement to verify if email address input exists in the database
         $sqlQuery = "SELECT * FROM users WHERE emailAddress = :username";
         
         //use PDO prepared statement to sanitize data
         $statement = $conn->prepare($sqlQuery);
         
         //execute the query
         $statement->execute(array(':username' => $email));
         
         //check if the record exists
         if($statement->rowCount()== 1){
             //hash the password
             $hashed_password = password_hash($password1, PASSWORD_DEFAULT);
             
             //sql statement to update the password
             $sqlUpdate = "UPDATE users SET password =:password WHERE emailAddress=:username";
             
             //use pdo prepared to sanitize SQL Statement
             $statement = $conn->prepare ($sqlUpdate);
             
             //execute the statement
             $statement->execute(array(':password'= $hashed_password, ':username' => $email));
             
             $result = "<p style='padding:20px;border:1px solid gray; color: green;'>Your Password has successfully been updated</p>"
         }
         else{
             $result = "<p style='padding:20px;border:1px solid gray; color: red;'>The email address does not exist in our database, please try again</p>"
         }
         
     } catch (PDOException $ex){
         $result = "<p style='padding:20px;border:1px solid gray; color: red;'>An error occured: ".$ex->getMessage(). "</p>";
     }
    

}else{
    $result = "<p style='padding:20px;border:1px solid gray; color: red;'>There were  ".count($form_errors). "errors in the form</p>";
}

}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            ilearner - africa's online learning space
        </title>
        <meta name="description" content="The HTML5 Herald">
        <meta name="author" content="SitePoint">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="../css/learn.css">

    <nav>

        <div class="logo">
            <h4>iLearner - Africa's Online Learning Space</h4> </div>

        <ul class="nav-home">

            <li><a href="#">Sign Up</a></li>
            <li><a href="/ilearner/public/#">Home</a></li>
        </ul>

    </nav>    
</head>
<body>
    <div class="login">
        <?php if(isset($result)) echo $result; ?>
        <?php if (!empty($form_errors)) echo show_errors($form_errors);?>
        <form method="post" id="reset" action="">
            <h3>User Password Reset</h3>

            <div id="Vendor" class ="logintabcontent">
                <label><b>Username</label>
                <input type ="email" name="username" >
                <br>
                <br>
                <label><b>New Password</label>
                <input type ="password" name="new_password" >
                <br>
                <label><b>Confirm Password</label>
                <input type ="password" name="confirm_password" >
                <br>
                <input type="submit" name="reset" id="rest" value="Reset Password">
            </div>

        </form>
    </div>



    <script src="../js/learn.js"></script>
    <?php
    include 'scripts.php';
    ?>    
</body>
<footer>
    <nav class="footer-nav">
        <ul>
            <li><a href="#">iHelper</a></li>
            <li><a href="#">iRefer and Save</a></li>
            <li><a href="#">iSubscribe</a></li>
            <li><a href="#">iTerms & Conditioins</a></li>
        </ul>
    </nav>   
</footer>
</html>
