
  <?php
  include_once 'sidebar_menu.php'
   ?>
    <div class="main_content">
        <div class="main_header">
            <h1 style="text-align:center;color:white;"><u>Travel with us!!</u></h1>
        </div>
        <div style="display:flex;min-height:calc(100vh -);">
            <section>
                <!-- LISTA CLIENTI -->
                <form name='signup_form' style="width:580px;margin-left:30px;" action="includes/signup_client.inc.php" method="post">
                    <fieldset style="height: auto;">
                        <h3>Client</h3>
                        <legend align='center'>Register</legend><br>
                        <label for="name">Name:</label><br>
                        <input type="text" id="full_name" name="name_client" oninput="validate_name(full_name,'asterix_full_name')">
                        <p class="asterix" id="asterix_full_name" style="display: inline-block;margin-bottom: 0px;font-size: 25px;margin-top: -14px; opacity: 0;">&#8226;</p><br>

                        <label for="name">Username:</label><br>
                        <input type="text" id="name_person1" name="uid_client" oninput="validate_name(name_person1,'asterix_name')">
                        <p class="asterix" id="asterix_name" style="display: inline-block;margin-bottom: 0px;font-size: 25px;margin-top: -14px; opacity: 0;">&#8226;</p><br>

                        <label for="local">Residence:</label><br>
                        <input type="text" id="local" name="local" disabled><br>

<!--                        <label for="date_format">Date format:</label><br>
                        <input type="text" id="dat_format" name="dtf" required value="mm/dd/aaaa" placeholder="mm/dd/aaaa"><br />-->
                        <label for="birthday">Birthday:</label><br>
                        <input type="text" id="dat" name="dt" oninput="validate_date(dt,'dd/mm/aaaa')" disabled>
                        <p class="asterix" id="asterix_data" style="display: inline-block;margin-bottom: 0px;font-size: 25px;margin-top: -14px; opacity: 0;">&#8226;</p><br>

                        <label for="mail">Email or Phone:</label>
                        <p class="asterix" id="asterix_tel_em1" style="display: inline-block;margin-bottom: 0px;font-size: 25px;margin-top: -14px; opacity: 0;">&#8226;</p><br>
                        <input type="text" id="contact1" name="mail_client" oninput="validate_telephone_email(mail_client,'asterix_tel_em1')"><br>
                        <label for="password">Password:</label>
                        <p class="asterix" id="asterix_pass" style="display: inline-block;margin-bottom: 0px;font-size: 25px;margin-top: -14px; opacity: 0;">&#8226;</p><br>
                        <input type="password" id="password1" name="pwd_client" oninput="validate_password(password1,'asterix_pass')"><br>

                        <label for="password">Confirm password:</label><br>
                        <input type="password" id="confirm_pwd" name="confirm_pwd_client"><br><br><br>

                        <a href="terms.html" target="_blank">Terms and conditions</a><br><br>
                        <input type="checkbox" name="terms" value="terms"> I agree on the terms and conditions.<br>
                        <input type="checkbox" name="vehicle" value="Bike" checked> I want to receive mails about travel offers.<br>
                        <button type="submit" name="submit" style="margin-bottom:5px;">Register</button>

                        <?php
                        if (isset($_GET["error"])) {
                          if($_GET["error"] == "emptyinputclient"){
                            echo "<p> Please fill all the inputs! </p>";
                          }
                          if($_GET["error"] == "invaliduidclient"){
                            echo "<p> Chose a proper username! </p>";
                          }
                          if($_GET["error"] == "invalidemailclient"){
                            echo "<p> Chose a proper email! </p>";
                          }
                          if($_GET["error"] == "unmatchingpasswordclient"){
                            echo "<p> Passwords do not match! </p>";
                          }
                          if($_GET["error"] == "statementfailedclient"){
                            echo "<p> Something went wrong! </p>";
                          }
                          if($_GET["error"] == "usernametakenclient"){
                            echo "<p> Username or email already used! </p>";
                          }
                          if($_GET["error"] == "noneforclient"){
                            echo "<p> User created succesfully! </p>";
                          }
                        }

                         ?>
                    </fieldset>
                </form>
            </section>
            <section>
                <form name='signup_form2' style="width:580px;margin-left:20px;" action="includes/signup_agent.inc.php" method="post">
                    <fieldset style="height:auto;">
                        <h3>Agent</h3>
                        <legend align='center'>Register</legend><br>
                        <label for="name">Name:</label><br>
                        <input type="text" id="full_name2" name="name_agent" oninput="validate_name(full_name2,'asterix_full_name2')">
                        <p class="asterix" id="asterix_full_name2" style="display: inline-block;margin-bottom: 0px;font-size: 25px;margin-top: -14px; opacity: 0;">&#8226;</p><br>

                        <label for="name">Username:</label><br>
                        <input type="text" id="name_person2" name="uid_agent" oninput="validate_name(name_person2,'asterix_name2')">
                        <p class="asterix" id="asterix_name2" style="display: inline-block;margin-bottom: 0px;font-size: 25px;margin-top: -14px; opacity: 0;">&#8226;</p><br>

                        <label for="department">Departament:</label><br>
                        <input list="departments" name="department" id="department" disabled>
                        <datalist id="departments">
                            <option value="Departament 1">
                            <option value="Departament 2">
                            <option value="Departament 3">
                            <option value="Departament 4">
                        </datalist>
                        <br>
                        <label for="office">Office residence:</label><br>
                        <input type="text" id="office" name="office" disabled><br>
                        <label for="mail">Email or Phone:</label>
                        <p class="asterix" id="asterix_tel_em2" style="display: inline-block;margin-bottom: 0px;font-size: 25px;margin-top: -14px; opacity: 0;">&#8226;</p><br>
                        <input type="text" id="contact2" name="mail_agent" oninput="validate_telephone_email(mail,'asterix_tel_em2')"><br>
                        <label for="password">Password:</label>
                        <p class="asterix" id="asterix_pass2" style="display: inline-block;margin-bottom: 0px;font-size: 25px;margin-top: -14px; opacity: 0;">&#8226;</p><br>
                        <input type="password" id="password2" name="pwd_agent" oninput="validate_password(password2,'asterix_pass2')"><br>

                        <label for="password">Confirm password:</label>
                        <p class="asterix" id="asterix_pass" style="display: inline-block;margin-bottom: 0px;font-size: 25px;margin-top: -14px; opacity: 0;">&#8226;</p><br>
                        <input type="password" id="confirm_pwd" name="confirm_pwd_agent"><br><br><br>

                        <a href="terms.html" target="_blank">Terms and conditions</a><br><br>
                        <input type="checkbox" name="terms" value="terms"> I agree on the terms and conditions.<br><br>
                        <button type="submit" name="submit" style="margin-bottom:5px;">Register</button>

                        <?php
                        if (isset($_GET["error"])) {
                          if($_GET["error"] == "emptyinputagent"){
                            echo "<p> Please fill all the inputs! </p>";
                          }
                          if($_GET["error"] == "invaliduidagent"){
                            echo "<p> Chose a proper username! </p>";
                          }
                          if($_GET["error"] == "invalidemailagent"){
                            echo "<p> Chose a proper email! </p>";
                          }
                          if($_GET["error"] == "unmatchingpasswordagent"){
                            echo "<p> Passwords do not match! </p>";
                          }
                          if($_GET["error"] == "statementfailedagent"){
                            echo "<p> Something went wrong! </p>";
                          }
                          if($_GET["error"] == "usernametakenagent"){
                            echo "<p> Username or email already used! </p>";
                          }
                          if($_GET["error"] == "noneforagent"){
                            echo "<p> User created succesfully! </p>";
                          }
                        }

                         ?>

                    </fieldset>
                </form>
            </section>
        </div>
        <?php
        include_once 'footer.php'
         ?>
    </div>
</body>
</html>
