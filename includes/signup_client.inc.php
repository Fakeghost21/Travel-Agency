<?php

require_once "dbh.inc.php";
require_once "functions.inc.php";

if (isset($_POST["submit"])) {
  $name = $_POST["name_client"];
  $uname = $_POST["uid_client"];
  $mail = $_POST["mail_client"];
  $pwd = $_POST["pwd_client"];
  $confirm_pwd = $_POST["confirm_pwd_client"];


  if(emptyInputSignup($name, $uname, $mail, $pwd, $confirm_pwd) !== false )
    {
      header("location: ../signup.php?error=emptyinputclient");
      exit();
    }

  if(invalidUid($uname) !== false )
    {
      header("location: ../signup.php?error=invaliduidclient");
      exit();
    }
  if(invalidEmail($mail) !== false )
    {
      header("location: ../signup.php?error=invalidemailclient");
      exit();
    }
  if(pwdMatch($pwd, $confirm_pwd) !== false )
    {
      header("location: ../signup.php?error=unmatchingpasswordclient");
      exit();
    }
  if(uidExists($conn, $uname, $mail) !== false )
    {
      header("location: ../signup.php?error=usernametakenclient");
      exit();
    }

  createUser($conn, $name, $mail, $uname, $pwd);

}
else {
  header("location: ../signup.php");
  exit();
}
