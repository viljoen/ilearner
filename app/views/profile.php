<!doctype html>
<?php
$page_title = "iProfile";
/*include_once 'profilefetch.php';
$fetch = new Profile();
$fetch->profileFetch();*/

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
                    <li><a href="profileedit?user_identity=<?php if (isset($encode_id)) echo $encode_id; ?>">Edit Profile</a></li>
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
              if(isset($_SESSION['userId'])) echo $_SESSION['userId'];?> <br>


             <h1>Profile</h1>
             <div class="demo-card-image mdl-card mdl-shadow--2dp" background="">
                     <div class="mdl-card__title mdl-card--expand"></div>
                     <div class="mdl-card__actions">
                         <img src="<?php if(isset($profile_picture)) echo $profile_picture; ?>" width="200" height="200">
                         <span class="demo-card-image__filename">Profile Image</span>
                     </div>
                 </div>
             <section class="profile">
                 <?php
                 echo Profile::profileFetch();
                 ?>
                     <table class="table1">
                         <tr>
                             <th>
                                 Email address:
                             </th>
                             <td>
                                 <?php if (isset($username)) {
                                     echo $username;
                                 } ?>
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
                                 <?php if (isset($firstName)){
                                     echo $firstName;
                                 } ?>
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

                             </th>
                             <td>
                                 <a href="profileedit?user_identity=<?php if (isset($encode_id)) echo $encode_id; ?>">Edit Profile</a>
                             </td>
                         </tr>

                     </table>
                 </section>


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
                    Profile::loadScripts();
                    Profile::loadJs();
                    Profile::loadMlJs();

?>
    </body>
<?php
endif
?>
