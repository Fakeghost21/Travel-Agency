<?php
if (isset($_POST["submit"])) {

  require_once "dbh.inc.php";
  require_once "functions.inc.php";
  $id = $_POST["id"];
  $departureCity = $_POST["departure_city"];
  $departureCountry = $_POST["departure_country"];
  $arrivingCity = $_POST["arriving_city"];
  $arrivingCountry = $_POST["arriving_country"];
  $travelBy = $_POST["travel_by"];

  updateRoute($conn, $departureCity, $departureCountry, $arrivingCity, $arrivingCountry, $travelBy, $id);
}
