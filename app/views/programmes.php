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
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="gridview.php">Programmes</a></li>
                    <li><a href="#">Add</a></li>
                    <li><a href="#">Notifications</a></li>    
                    <li><a href="#">Messenger</a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Replicator</a></li>
                    <li><a href="#">Learner Access</a></li>
                    <li><a href="#">Staff Access</a></li>
                    <li><a href="#">Nav11</a></li>
                    <li><a href="#">Nav12</a></li>
                </ul>
            </div>
            </div>
            <div class="Content">
                
                

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
                <h1>Programmes (Learning Path)</h1>  
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

include 'footer.php';

?>