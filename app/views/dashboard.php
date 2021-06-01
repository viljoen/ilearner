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
                <div class="main-overview">
                    <div class="overviewcard">
                        <div class="overviewcard__icon">Overview</div>
                        <div class="overviewcard__info">Card1</div>
                    </div>
                    <div class="overviewcard">
                        <div class="overviewcard__icon">Overview</div>
                        <div class="overviewcard__info">Card2</div>
                    </div>
                    <div class="overviewcard">
                        <div class="overviewcard__icon">Overview</div>
                        <div class="overviewcard__info">Card3</div>
                    </div>
                    <div class="overviewcard">
                        <div class="overviewcard__icon">Overview</div>
                        <div class="overviewcard__info">Card4</div>
                    </div>
                </div>
                
                <div class="main-cards">
                    <div class="cards">OtherCardMain</div>
                    <div class="cards">OtherCardSecondary</div>
                    <div class="cards">OtherCardThird</div>
                </div>
  
                
                

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
              <p>This is text Dashboard</br> This is test Dashboard <br> </p>  
            </div>
            <div class="InfoPanel">
                <div class="month">
                    <ul>
                        <li class="prev">&#10094;</li>
                        <li class="next">&#10095;</li>
                        <li>August<br><span style="font-size:12px">2021</span></li>
                    </ul>
                </div>

                <ul class="weekdays">
                    <li>Mo</li>
                    <li>Tu</li>
                    <li>We</li>
                    <li>Th</li>
                    <li>Fr</li>
                    <li>Sa</li>
                    <li>Su</li>
                </ul>

                <ul class="days">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li><span class="active">10</span></li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                    <li>16</li>
                    <li>17</li>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>
                    <li>21</li>
                    <li>22</li>
                    <li>23</li>
                    <li>24</li>
                    <li>25</li>
                    <li>26</li>
                    <li>27</li>
                    <li>28</li>
                    <li>29</li>
                    <li>30</li>
                    <li>31</li>
                </ul>    
                <div id="myDIV" class="header">
                    <h2>My To Do List</h2>
                    <input type="text" id="myInput" placeholder="Title...">
                    <span onclick="newElement()" class="addBtn">Add</span>
                </div>

                <ul id="myUL">
                    <li>Hit the gym</li>
                    <li class="checked">Pay bills</li>
                    <li>Meet George</li>
                    <li>Buy eggs</li>
                    <li>Read a book</li>
                    <li>Organize office</li>
                </ul> 
                <!--https://www.w3schools.com/howto/howto_js_todolist.asp-->
                
                <br><a href="#" class="notification">
                    <span>Inbox</span>
                    <span class="badge">3</span>
                </a><br><!-- https://www.w3schools.com/howto/howto_css_notification_button.asp --> 

                <br><p>This is Dashboard info</br> This is This is Dashboard info <br> </p>  
            </div>
</div>
        
    <script src="learn.js"></script>
<?php

include 'scripts.php';

?>
    
    </body>

<?php

include 'footer.php';

?>
