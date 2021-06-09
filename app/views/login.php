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
        <form id="login" action='/ilearner/public/vendorDashboard'>
            <!--<div class ="logintitle">
                <h4 style="text-align:center">Not a registered user? <a href="#">Register Now</a></h4>
            </div>-->
            <br>
            <br>

            <div class ="logintab">
                <button class="logintablinks" onclick="openUserType(event, 'Vendor')" id="loginTabDefaultOpen" >Vendor </button>

                <!--<button class="logintablinks" onclick="openUserType(event, 'Learner')">Learner</button>-->
            </div>


            <div id="Vendor" class ="logintabcontent">
                <label><b>Username</label>
                <input type ="email" name="Uname" id="Uname" placeholder "Username">
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
            </div>

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
