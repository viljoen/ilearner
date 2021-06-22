<?php
/*this needs to be moved to controller/model*/

include_once 'testdbconnect.php';
include_once 'vendorsignupisvalid.php';

/*
 * This was the original method used for fetchin the profile
 * if(isset($_SESSION['userId'])){
    $id = $_SESSION['userId'];
    
    $sqlQuery = "SELECT * FROM users WHERE userId =:id";
    $statement = $conn->prepare($sqlQuery);
    $statement->execute(array(':id' => $id));
    
    while($rs = $statement->fetch()){
        $firstName = $rs['firstName'];
        $lastName = $rs['lastName'];
        $username = $rs['emailAddress'];
        $dateJoined = strftime("%b %d, %Y", strtotime($rs["dateCreated"]));   
    }
    
    $encode_id = base64_encode("encodeuserid{$id}");
}*/
/*
 * this is the update method to include the profile update
 */
if((isset($_SESSION['userId'])) || isset($_GET['user_identity']) && !isset($_POST['updateProfile'])){
    if(isset($_GET['user_identity'])){
        $url_encode_id = $_GET['user_identity'];
        $decode_id = base64_decode($url_encode_id);
        $user_id_array = explode("encodeuserid", $decode_id);
        $id = $user_id_array[1];
    }else{
       $id = $_SESSION['userId']; 
    }
    
    $sqlQuery ="SELECT * FROM users WHERE userId =:id";
    $statement =$conn->prepare($sqlQuery);
    $statement->execute(array(':id' => $id));
    
    while($rs = $statement->fetch()){
        $firstName = $rs['firstName'];
        $lastName = $rs['lastName'];
        $username = $rs['emailAddress'];
        $dateJoined = strftime("%b %d, %Y", strtotime($rs["dateCreated"]));
    }
    
    $encode_id = base64_encode("encodeuserid{$id}");
} elseif(isset($_POST['updateProfile'])){
    //initialize an array to store any error messages
    $form_errors =  array();
    
    //form validation
    $required_fields = array('username', 'firstName');
    
    //call the function to check empty field and merge the returned data into form_error array
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));
    
    //collect form adata and store as variables
    $username = $_POST['emailAddress'];
    $firstName = $_POST['firstName'];
    $hidden_id = $_POST['hidden_id'];
    
    if(empty($form_errors)){
        try{
            //create SQL statement
            $sqlUpdate = "UPDATE users SET emailAddress =: emailAddress, firstName =:firstName WHERE userId =:id";
            
            //use PDO prepared to sanitize data
            $statement = $conn->prepare($sqlUpdate);
            
            //update the record in the database
            $statement->execute(array(':emailAddress' => $username, ':email' => $email, ':id' =>$hidden_id));
            
            //check if one new row was created
            if($statement->rowCount() == 1){
                $result = "<script type=\"text/Javascript\">
                    swal(\"Updated!\",\"Profile Update Successfully.\"success\");</script>";
                
            }else{
                $result = "<script type=\"text/Javascript\">
                    swal(\"Nothing Happened!\",\"You have not made any changes.\");</script>";
            }
        } catch (PDOException $ex){
            $result = userMessage("An error occured:" .$ex->getMessage());
        }
    }
    else{
        $result = userMessage("There were" .count($form_errors)). " errors inthe form<br>";
    }
    
}