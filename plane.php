<?php
include_once 'sidebar_menu.php';
include_once "includes/dbh.inc.php";
 ?>

	<div class="main_content">
		<div class="main_header">
			<h1 style="text-align:center;"><u>Travel with us!</u></h1>
		</div>
    <style> #travel_by_plane {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        background: #FFFFFF;
        width: 100%;
    }

    #travel_by_plane td,
    #travel_by_plane th {
        width: 120px;
        padding-bottom: 10px;
        color: #2E3A7F;
        text-align: center;
    }

    #travel_by_plane th {
        width: 120px;
        padding-bottom: 10px;
        padding-top: 5px;
        text-align: center;
        background-color: #6F77A4;
        color: #FFFFFF;
    }
    </style>
    <?php
      $sql = "SELECT * FROM routes WHERE travelby = 'Plane';";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        echo " <table id='travel_by_plane'>
                <tr>
                  <th>Departure country</th>
                  <th>Departure city</th>
                  <th>Arriving country</th>
                  <th>Arriving city</th>";
        if (isset($_SESSION["agentuid"])) {
        		echo "<th>Id</th>";

        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr>';
          echo '<td>'. $row['departurec'] .'</td>';
          echo '<td>'. $row['departure'] .'</td>';
          echo '<td>'. $row['arrivingc'] .'</td>';
          echo '<td>'. $row['arriving'] .'</td>';
          if (isset($_SESSION["agentuid"])) {
              echo '<td>'. $row['id'] .'</td>';
            }
          echo '</tr>';
        }
        echo "</table>";}
        if (isset($_SESSION["agentuid"])) {
            echo "<form name='delete_form' action='' method='post'> ";
            echo "<button type='submit' name='submit'>Delete</button>";
            echo "<input type='text' name='delete_route' placeholder='Delete route(by id)'><br>";
            echo "<button type='submit' name='update'>Update route</button>";
            echo "<input type='text' name='update_route' placeholder='Update route(by id)'><br>";
            echo "<button type='submit' name='add'>Add route</button><br>";
            echo "</form>";
            if (isset($_POST["submit"])) {
              $routeId = $_POST["delete_route"];
              $sql = "DELETE FROM routes WHERE id = $routeId;";
              if ($conn->query($sql) === TRUE) {
                  header("Refresh:0");
                } else {
                        echo "Error deleting record: " . $conn->error;
                        }
              $conn->close();
            }
            if (isset($_POST["add"])){
              header("location: ../addpage.php");
            }
            if (isset($_POST["update"])){
              $routeId = $_POST["update_route"];
              header("location: ../updatepage.php?id=$routeId");
            }
          }
      }
     ?>
	</div>
</body>
</html>
