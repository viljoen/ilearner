<?php
/* move this to a modal or have it function directy off the profile page*/
$page_title = 'iProfile Edit';

include_once 'header.php';
include_once 'profilefetch.php';


?>

<?php if (!isset($_SESSION['username'])): ?>
                    <p style="background-color: white;"> Your are currently not logged in <a href="login">Login</a> Not Yet a member? <a href ="index">Signup</a></p>
                <?php else: ?>
                    
    <body>

        
        
        <div class="container">
            <div class="SubMenu">
            <div class="MenuItems">
                <ul class="SubNav-links">
                    <li><a href="#">Nav1</a></li>
                    <li><a href="profile">Dashboard</a></li>
                    <li><a href="#">Nav3</a></li>
                    <li><a href="#">Nav4</a></li>
                    <li><a href="#">Nav5</a></li>    
                    <li><a href="profileedit">Edit Profile</a></li>
                    <li><a href="#">Nav7</a></li>
                    <li><a href="#">Nav8</a></li>
                    <li><a href="#">Nav9</a></li>
                    <li><a href="#">Nav10</a></li>
                    <li><a href="#">Nav11</a></li>
                    <li><a href="#">Nav12</a></li>
                </ul>
            </div>
            </div>
            <div class="Content">

                
             <?php if (isset($_SESSION['username'])) echo $_SESSION['username'];
             echo "<br>";
              if(isset($_SESSION['userId'])) echo $_SESSION['userId'];?>
                        
             <h1>Profile Edit</h1>
             
             <div>
                 <?php if(isset($result)) echo $result; ?>
                 <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
             </div>
             <div class="clearfix"></div>
             <form method="post" action="">
                 <div>
                     <label for="emailField">
                         Email
                     </label>
                     <input type="email" name="email" class="form-control" id="emailField" value="<?php if(isset($email)) echo $email;?>">
                 </div>
                 <div>
                     <label for="firstnameField">
                         Firstname
                     </label>
                     <input type="text" name="firstName" vslue="<?php if(isset($firstName)) echo $firstName; ?>" class="form-control" id="firstnameField">
                 </div>
                 <input type="hidden" name="hidden_id" value="<?php if(isset($userId)) echo $userId;?>">
                 <button type="submit" name="updateProfile" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                     Update Profile
                 </button>
                 
             </form>   

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2>Item Search Modal</h2>
                        <input type="text" id="SectionSearch" onkeyup="SectionSearch()" placeholder="Search.." title="Type in a category">
                        <!-- Trigger/Open The Modal -->
                        <li><a href="#">ListItem1</a></li>
                        <li><a href="#">ListItem2</a></li>
                        <li><a href="#">ListItem3</a></li>
                        <li><a href="#">ListItem4</a></li>
                        <li><a href="#">ListItem5</a></li>    
                        <li><a href="#">ListItem6</a></li>
                        <li><a href="#">ListItem</a></li>
                        <li><a href="#">ListItem8</a></li>
                        <li><a href="#">ListItem9</a></li>
                        <li><a href="#">ListItem10</a></li>
                        <li><a href="#">ListItem11</a></li>
                        <li><a href="#">ListItem12</a></li>
                    </div>

                </div>   
                
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
                        echo "<br>" .$_SESSION['last_active'];
                    };
                    ?> </p>
              <p>This is text text</br> This is test text <br> </p>  
            </div>
</div>
        
        
        
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

