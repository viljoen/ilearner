<?php
include_once 'testdbconnect.php';
if (isset($_POST['username'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        $sqlinsert = "INSERT INTO users (firstName, lastName, emailAddress, password, dateCreated)"
                . "VALUES (:firstName,:lastName,:username,:password, now())";

        $statement = $conn->prepare($sqlinsert);
        $statement->execute(array(':firstName' => $firstName, ':lastName' => $lastName, ':username' => $username, ':password' => $hashed_password));

        if ($statement->rowCount() == 1) {
            $result = "<p>Registration Successful</p>";
        }
    } catch (PDOException $ex) {
        $result = "<p>Registration Error:" . $ex->getMessage() . "</p>";
    }
}
?><!doctype html>
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
                
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="/ilearner/public/login">Login</a></li>
                     
                   
                     
                </ul>
            
  
 
        </nav>    
</head>
        
<body>        
    <div class="container">
        <div class ="regform">
            <h1>Vendor  Registration:</h1> 
 <?php 
 if(isset($result)) echo $result; 
 ?>
            <form method="post" id="regForm" action="">
                <p><input type="text" name="firstName" id="name" placeholder="First name..." ></p>
                <p><input type="text" name="lastName" id="surname" placeholder="Last name..." ></p>
                <p><input type="email" name="username" id="uname" placeholder="E-mail..." ></p>
                <p><input type="password" name="password" id="pass" placeholder="Password" ></p>
                <input type="submit" name="signup" id="signup" value="Register">                   

            </form>
        </div>

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