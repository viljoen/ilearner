<?php

include_once 'testdbconnect.php';
include_once 'vendorsignupisvalid.php';

if(isset($_SESSION['userId'])){
    $id = $_SESSION['userId'];
    
    $sqlQuery = "SELECT * FROM users WHERE userId =:id";
    $statement = $conn->prepare($sqlQuery);
    $statement->execute(array(':id' => $id));
    
    while($rs = $statement->fetch()){
        $firstName = $rs['firstName'];
        $lastName = $rs['lastName'];
        $username = $rs['emailAddress'];
        /*$contactNumber = $rs['contactNumber'];*/
        $dateJoined = strftime("%b %d, %Y", strtotime($rs["dateCreated"]));
        
    }
    
    $encode_id = base64_encode("encodeuserid{$id}");
}

