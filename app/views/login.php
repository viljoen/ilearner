<?php
$page_title = "iLearner Login";''
?>

<?php
include_once 'sessions.php';
//add our database connection script
include_once 'testdbconnect.php';
//add our database validation scripts
include_once'vendorsignupisvalid.php';

if (isset($_POST['login'])){
//array to hold errors
$form_errors = array();
    
//validate
$required_fields = array('username','password');
$form_errors = array_merge($form_errors, check_empty_fields($required_fields));

if(empty($form_errors)){
    //collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    /*isset($_POST['remember']) ? $remember = $_POST['remember'] : $remember = ""; */    
    
    //check if user exist in database
    $sqlQuery = "SELECT * FROM users WHERE emailAddress = :username";
    $statement = $conn->prepare($sqlQuery);
    $statement->execute(array(':username' => $username));
    
    while ($row = $statement->fetch()){
        $id = $row['userId'];
        $hashed_password = $row['password'];
        $username = $row['emailAddress'];
                
        if(password_verify($password, $hashed_password)){
            $_SESSION['userId'] = $id;
            $_SESSION['username'] = $username;
            
            $fingerprint = md5($_SERVER['REMOTE_ADDR'] .$_SERVER['HTTP_USER_AGENT']);
            $_SESSION['last_active'] = time();
            $_SESSION['fingerprint'] = $fingerprint;
            
            /*if($remember === "yes"){
                rememberMe($id);
            }*/
            
            redirectTo('vendorDashboard');
        }else{
            $result = userMessage("Invalid Username (Email Address) or password");
        }
    }
    
}else{
    $result = userMessage("There were " . count($form_errors) . " errors in the form");
}

}
?>

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
        <link rel="stylesheet" href="../css/material.min.css">
        

    <nav>

        <div class="logo">
            <h4>iLearner - Africa's Online Learning Space</h4> </div>

        <ul class="nav-home">

            <li><a href="index">Sign Up</a></li>
            <li><a href="index">Home</a></li>
        </ul>

    </nav>    
</head>
<body>
    <div class="login">
        <?php
        if (isset($result))
            echo $result;
        ?>
        <?php
        if (!empty($form_errors))
            echo show_errors($form_errors);
        ?>


        <!--<div class ="logintitle">
            <h4 style="text-align:center">Not a registered user? <a href="#">Register Now</a></h4>
        </div>-->
        <br>
        <br>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
            <a href="#scroll-tab-1" class="mdl-layout__tab is-active">Vendor</a>
            <a href="#scroll-tab-2" class="mdl-layout__tab">Student</a>

        </div>
        <main class="mdl-layout__content">
            <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
                <div class="page-content">
                    
                    <form method="post" id="login" action="">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label class="mdl-textfield__label"><b>Username</label>
                            <input class="mdl-textfield__input"type ="email" name="username" >
                            <br>
                            <br>
                            <label class="mdl-textfield__label"><b>Password</label>
                            <input class="mdl-textfield__input" type ="password" name="password" >
                            <br>
                            <br>
                            <!--<input type ="checkbox" id="captcha"> <span> I am not a Robot </span>
                            <br>
                            <br>-->
                            <div class="mdl-checkbox__input">
                                <label class="mdl-textfield__label">
                                    <input class="mdl-textfield__input" type ="checkbox" name="remember" value="yes" id="remember"> <span> Remember Me </span>
                                </label>
                                <br>
                                <br>
                            </div>
                            <input type="submit" name="login" id="login" value="Log In">
                            <br>
                            <br>
                            <h4 style="text-align:center"><a href="forgotpassword">Forgot Password? </a></h4>
                        </div>
                    </form> 
             </section>
            <section class="mdl-layout__tab-panel" id="scroll-tab-2">
                <div class="page-content"><!-- Your content goes here --></div>
            </section>

        </main>


                            <!--<div id="Learner" class ="logintabcontent">
                                <label><b>Username</label>
                                <input type ="text" name="Uname" id="Uname" placeholder "Username">
                                <br>
                                <br>
                                <label><b>Password</label>
                                <input type ="password" name="Pass" id="Pass" placeholder "Password">
                                <br>
                                <br>
                                <input type ="checkbox" id="captcha"> <span> I am not a Robot </span>
                                <br>
                                <br>
                                <input type ="checkbox" id="remember"> <span> Remember Me </span>
                                <br>
                                <br>
                                <input type="submit" name="log" id="log" value="Log In">
                                <br>
                                <br>
                                <h4 style="text-align:center"><a href="#">Forgot Password? </a></h4>
                            </div>-->
                            <br><!-- Remove this section later/update -->
                            <p> -------------------------OR ---------------------- </p>
                            <div id="Social" class ="Social">
                                <a href="#" class="fb btn">
                                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                </a>
                                <a href="#" class="twitter btn">
                                    <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                                </a>
                                <a href="#" class="google btn">
                                    <i class="fa fa-google fa-fw"></i> Login with Google+
                                </a>
                            </div>


                    </div>
                </div>   


                </div>


    </div>



    <script src="../js/learn.js"></script>
    <script src="../js/material.min.js"></script>
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
