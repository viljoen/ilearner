<!doctype html>
<?php

include 'header.php';

?>
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
              <p>This is text text</br> This is test text <br> </p>  
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