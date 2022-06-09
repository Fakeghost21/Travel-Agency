<?php
include_once 'sidebar_menu.php'
 ?>
    <div class="main_content">
        <div class="main_header">
            <h1 style="text-align:center;color:white;"><u>Travel with us!!</u></h1>
        </div>
        <div class="section">
            <form name='add_form' action="includes/add.inc.php" method="post" id="login_form">
                    <legend align='center'>Add a new route</legend><br>
                    <div class="form_data">
                    <input type = "text" name = "departure_city" placeholder="Departure city"></input>
                    </div>
                    <div class="form_data">
                    <input type = "text" name = "departure_country" placeholder="Departure country"></input>
                    </div>
                    <div class="form_data">
                    <input type = "text" name = "arriving_city" placeholder="Arriving city"></input>
                    </div>
                    <div class="form_data">
                    <input type = "text" name = "arriving_country" placeholder="Arriving country"></input>
                    </div>
                    <div class="form_data">
                    <input type = "text" name = "travel_by" placeholder="Travel by"></input>
                    </div>
                    <button type="submit" name="submit" class="aut_btn">Add route</button><br><br>
                    <?php
                    if (isset($_GET["error"])) {
                      if($_GET["error"] == "emptyinput"){
                        echo "<p> Please fill all the inputs! </p>";
                      }
                      if($_GET["error"] == "wronglogin"){
                        echo "<p> Incorrect login information! </p>";
                      }
                    }

                     ?>
            </form>
            <?php
            include_once 'footer.php'
             ?>
        </div>
    </div>
</body>
</html>
