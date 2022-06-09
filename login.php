<?php
include_once 'sidebar_menu.php'
 ?>
    <div class="main_content">
        <div class="main_header">
            <h1 style="text-align:center;color:white;"><u>Travel with us!!</u></h1>
        </div>
        <div class="section">
            <form name='signup_form' action="includes/login.inc.php" method="post" id="login_form">
                <fieldset style="width:1170px;box-shadow: 0 0px 8px;">
                    <legend align='center'>Login</legend><br>
                    <div class="form_data">
                        <label for="username">Email or Phone:</label>
                        <p class="asterix" id="asterix_signin" style="display: inline-block;margin-bottom: 0px;font-size: 25px;margin-top: -14px; opacity: 0;">&#8226;</p><br>
                        <input type="text" id="contact" name="username" oninput="validate_telephone_email('asterix_signin')"><br>
                    </div>
                    <div class="form_data">
                        <label for="password">Password:</label>
                        <p class="asterix" id="asterix_password" style="display: inline-block;margin-bottom: 0px;font-size: 25px;margin-top: -14px; opacity: 0;">&#8226;</p><br>
                        <input type="password" id="password" name="password" oninput="validate_password(password,'asterix_password')"><br>
                    </div>
                    <button type="submit" class="aut_btn" name="submit">Autentificare</button><br><br>

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
                </fieldset>
            </form>
            <?php
            include_once 'footer.php'
             ?>
        </div>
    </div>
</body>
</html>
