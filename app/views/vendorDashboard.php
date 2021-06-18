<?php
include_once 'sessions.php';
//include header
include_once 'header.php';
//then include any other required
include_once 'testdbconnect.php';
include_once 'vendorsignupisvalid.php';
$page_title = "iDashboard";
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
                <p>Welcome <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?> , you are now viewing the:</p>
                
                <h1>Vendor Dashboard</h1>  


                
            </div>
            <div class="InfoPanel">
                <div class="session"><i><?php 
                echo sessionTimer();
                ?>
                    </i></div>
                    <p>
                    <?php echo $_SERVER['REMOTE_ADDR']."<br>". $_SERVER['HTTP_USER_AGENT']; 
                    echo "<br>" .time();
                    if(isset($_SESSION['last_active'])){
                        echo "<br>"  .$_SESSION['last_active'];
                    };
                    ?> </p>
            </div>
</div>
       
        <script src="../js/learn.js"></script>
<?php

include 'scripts.php';

?>
    
    </body>
<?php 
endif 
?> 

   
    
<?php

include 'footer.php';

?>