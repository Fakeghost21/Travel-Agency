<?php
include_once 'sidebar_menu.php';
include_once "includes/dbh.inc.php";
 ?>
    <div class="main_content">
        <div class="main_header">
            <h1 style="text-align:center;color:white;"><u>Travel with us!!</u></h1>
        </div>
        <div class="section">
            <form name='update_form' action="" method="post">
                    <legend align='center'>Update this route</legend><br>
                    <?php
                    $routeId = $_GET["id"];
                    $sql = "SELECT * FROM routes WHERE id = $routeId;";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo "<div class='form_data'>";
                    echo "<input type = 'text' name = 'id' value =" . $row['id'] . " disabled></input>";
                    echo"</div>";
                    echo "<div class='form_data'>";
                    echo "<input type = 'text' name = 'departure_city' value =" . $row['departure'] . "></input>";
                    echo"</div>";
                    echo "<div class='form_data'>";
                    echo"<input type = 'text' name = 'departure_country' value =" . $row['departurec'] . "></input>";
                    echo"</div>";
                    echo "<div class='form_data'>";
                    echo"<input type = 'text' name = 'arriving_city' value =" . $row['arriving'] . "></input>";
                    echo"</div>";
                    echo "<div class='form_data'>";
                    echo"<input type = 'text' name = 'arriving_country' value =" . $row['arrivingc'] . "></input>";
                    echo"</div>";
                    echo "<div class='form_data'>";
                    echo"<input type = 'text' name = 'travel_by' value =" . $row['travelby'] . "></input>";
                    echo"</div>";
                    ?>
                    <button type="submit" name="submit" class="aut_btn">Update route</button><br><br>
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
                     <?php
                     if (isset($_POST["submit"])) {
                     $departureCity = $_POST["departure_city"];
                     $departureCountry = $_POST["departure_country"];
                     $arrivingCity = $_POST["arriving_city"];
                     $arrivingCountry = $_POST["arriving_country"];
                     $travelBy = $_POST["travel_by"];
                     $sql = "UPDATE routes SET departure = '$departureCity',departurec = '$departureCountry',arriving = '$arrivingCity',arrivingc = '$arrivingCountry',travelby = '$travelBy' WHERE id = $routeId;";
                     if ($conn->query($sql)) {
                       header("location: ../plane.php");
                       $conn->close();
                       exit();
                     }
                     else {
                         header("location: ../plane.php?error=$routeId");
                         $conn->close();
                         exit();
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
