<?php
require_once "dbh.inc.php";
require_once "functions.inc.php";

if (isset($_POST["submit"])) {
  $uname = $_POST["username"];
  $pwd = $_POST["password"];

  require_once "dbh.inc.php";
  require_once "functions.inc.php";

  if(emptyInputLogin($uname, $pwd) !== false )
    {
      header("location: ../login.php?error=emptyinput");
      exit();
    }

    if(uidExistsAgent($conn, $uname, $uname) !== false ){
      loginAgent($conn, $uname, $pwd);}
    else{
      loginUser($conn, $uname, $pwd);}
  

}
else{
  header("location: ../login.php");
  exit();
}
