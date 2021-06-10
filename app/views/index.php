<?php

//NB this logic to be moved to the Vendor Signup Controller and model

//add our database connection script
include_once 'testdbconnect.php';

//process the form
if (isset($_POST['signup'])) {
    //initialize an array to store any error message from the form
    $form_errors = array();

    //form validation
    $required_fields = array('firstName', 'lastName', 'username', 'password');

    //loop through the required fields array
    foreach ($required_fields as $name_of_field) {
        if (!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL) {
            $form_errors[] = $name_of_field ." is a required field";
        }
    }

    //check if error array is empty, if yes process form data and insert the record
    if (empty($form_errors)) {
        //collect form data and store in variables
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        //hashing the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        //inserting the data
        try {
            //creating the SQL insert statement
            $sqlinsert = "INSERT INTO users (firstName, lastName, emailAddress, password, dateCreated)"
                    . "VALUES (:firstName,:lastName,:username,:password, now())";
            //use pdo to sanatize the data
            $statement = $conn->prepare($sqlinsert);

            //add the data into the database
            $statement->execute(array(':firstName' => $firstName, ':lastName' => $lastName, ':username' => $username, ':password' => $hashed_password));

            //check if one row was created
            if ($statement->rowCount() == 1) {
                $result = "<p>Registration Successful</p>";
            }
        }

        //if data insert fails
        catch (PDOException $ex) {
            $result = "<p>Registration Error:" . $ex->getMessage() . "</p>";
        }
    } /*else {
        if (count($form_errors) == 1) {
            $result = "<p style='color: red;'> There was 1 error in the form<br>";

            $result .= "<ul style='color: red;'>";
            //loop through error array and display all items
            foreach ($form_errors as $error) {
                $result .= "<li> {$error} </li>";
            }
            $result .= "</ul></p>";
        }
    }*/ else {
        $result = "<p style='color: red;'> There were " . count($form_errors) . " errors in the form<br>";

        $result .= "<ul style='color: red;'>";
        //loop through error array and display all items
        foreach ($form_errors as $error) {
            $result .= "<li> {$error}</li>";
        }
        $result .= "</ul></p>";
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