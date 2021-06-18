<!doctype html>
<?php
$page_title = "iProfile";
include 'header.php';
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
                    <li><a href="#" id="myBtn">Search Modal</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="gridview.php">GridView</a></li>
                    <li><a href="#">Tasks</a></li>
                    <li><a href="#">Notifications</a></li>    
                    <li><a href="#">Nav6</a></li>
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
                        
             <h1>Profile</h1>     
             <secion class="profile">
                     <table class="table1">
                         <tr>
                             <th>
                                 Email address:
                             </th>
                             <td>
                                 <?php if (isset($username))echo $username; ?>
                             </td>
                         </tr>
                         <tr>
                             <th>
                                 Date joined:
                             </th>
                             <td>
                                 <?php if (isset($dateJoined)){
                                     echo $dateJoined;
                                     
                                 } 
                                 ?>
                             </td>
                         </tr>
                         <tr>
                             <th>
                                 Firstname:
                             </th>
                             <td>
                                 <?php if (isset($firstName)) echo $firstName;?>
                             </td>
                         </tr>
                         <tr>
                             <th>
                                 Lastname:
                             </th>
                             <td>
                                 <?php if (isset($lastName)){ 
                                     echo $lastName; 
                                     
                                 }
                                 ?>
                             </td>
                         </tr>
                         <<tr>
                             <th>
                                 Contact Number:
                             </th>
                             <td>
                                 <?php /*if (isset($contactNumber)){
                                     echo $contactNumber; 
                                     
                                 }*/
                                 ?>
                             </td>
                         </tr>
                         <tr>
                             <th>

                             </th>
                             <td>
                                 <a href="editProfile.php?user_identity=<?php if (isset($encode_id)) echo $encode_id; ?>">
                                     <span>
                                         Edit Profile
                                     </span>
                                 </a>
                             </td>
                         </tr>

                     </table>
                 </secion>
                

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
              <p>This is text text</br> This is test text <br> </p>  
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