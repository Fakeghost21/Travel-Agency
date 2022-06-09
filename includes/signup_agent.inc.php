<?php

require_once "dbh.inc.php";
require_once "functions.inc.php";

if (isset($_POST["submit"])) {
  $name = $_POST["name_agent"];
  $uname = $_POST["uid_agent"];
  $mail = $_POST["mail_agent"];
  $pwd = $_POST["pwd_agent"];
  $confirm_pwd = $_POST["confirm_pwd_agent"];


  if(emptyInputSignup($name, $uname, $mail, $pwd, $confirm_pwd) !== false )
    {
      header("location: ../signup.php?error=emptyinputagent");
      exit();
    }

  if(invalidUid($uname) !== false )
    {
      header("location: ../signup.php?error=invaliduidagent");
      exit();
    }
  if(invalidEmail($mail) !== false )
    {
      header("location: ../signup.php?error=invalidemailagent");
      exit();
    }
  if(pwdMatch($pwd, $confirm_pwd) !== false )
    {
      header("location: ../signup.php?error=unmatchingpasswordagent");
      exit();
    }
  if(uidExistsAgent($conn, $uname, $mail) !== false )
    {
      header("location: ../signup.php?error=usernametakenagent");
      exit();
    }

  createAgent($conn, $name, $mail, $uname, $pwd);

}
else {
  header("location: ../signup.php");
  exit();
}
