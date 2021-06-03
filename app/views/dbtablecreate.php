<!doctype html>
<?php

include 'header.php';

?>
    <body>

        
        
        <div class="container">
            <div class="SubMenu">
            <div class="MenuItems">
                <ul class="SubNav-links">
                    <li><a href="#" id="myBtn">Search</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Course Listing</a></li>
                    <li><a href="#">Tasks</a></li>
                    <li><a href="#">Notifications</a></li>    
                    <li><a href="#">Messenger</a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Replicator</a></li>
                    <li><a href="#">Group Classes</a></li>                    
                    <li><a href="#">Learner Access</a></li>
                    <li><a href="#">Staff Access</a></li>
                    <li><a href="#">Nav11</a></li>
                    <li><a href="#">Add Course</a></li>
                </ul>
            </div>
            </div>
            <div class="Content">
                <div class="dbcontainer">
                    <br>
                    <div>
                        <h1> Database </h1>
                        <hr>
                        <br>
                        <h2>Connection Test</h2>
                        <br>
                        <h3><?php
                        $host = 'localhost';
                        $db = 'ilearner';
                        $user = 'root';
                        $pass = '';

                        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

                        try {
                            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

                            $conn = new PDO($dsn, $user, $pass, $options);

                            if ($conn) {
                                echo "Connected to the $db database successfully!";
                            }
                        } catch (PDOException $e) {
                            echo $e->getMessage();
                        }
                        ?></h3>       
                    </div>
                    <br>
                    <hr>
                    


                </div>

            </div>
            <div class="InfoPanel">
                              

                <br><p>This is Dashboard info</br> This is This is Dashboard info <br> </p>   
            </div>
</div>
        
        <script src="../js/learn.js"></script>
<?php

include 'scripts.php';

?>
    
    </body>

<?php

include 'footer.php';

?>