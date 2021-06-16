<!doctype html>

<?php
//first include the session start
include_once 'sessions.php';
//second include header
include 'header.php';
//then include any other required

?>
<?php if (!isset($_SESSION['username'])): ?>
                    <p style="background-color: white;"> Your are currently not logged in <a href="login">Login</a> Not Yet a member? <a href ="index">Signup</a></p>
                <?php else: ?>
                    
                
    <body>

        
        
        <div class="container">
            <div class="SubMenu">
                <div class="MenuItems">
                    <ul class="SubNav-links">
                        <li><a href="#">Tasks</a></li>
                        <li><a href="#">Notifications</a></li>    
                        <li><a href="#">Dashboard Config</a></li>
                    </ul>
                </div>
            </div>
            <div class="Content">
                


                <h1>Vendor Dashboard</h1>  
            </div>
            <div class="InfoPanel">
                <p> You are logged in as " <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?> " <a href="logout">Logout</a></p> 
            </div>
</div>
       
        <script src="../js/learn.js"></script>
<?php

include 'scripts.php';

?>
    
    </body>
<?php endif ?> 

<?php

include 'footer.php';

?>