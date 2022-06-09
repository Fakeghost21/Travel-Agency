<?php

function emptyInputSignup($name, $uname, $mail, $pwd, $confirm_pwd){
  $result;
  if (empty($name) || empty($uname) || empty($mail) || empty($pwd) || empty($confirm_pwd)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidUid($uname){
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidEmail($mail){
  $result;
  if (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function pwdMatch($pwd, $confirm_pwd){
  $result;
  if ($pwd !== $confirm_pwd) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function uidExistsAgent($conn, $uname, $mail){
  $sql = "SELECT * FROM agents WHERE username = ? OR email = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=statementfailed!!");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $uname, $mail);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);
}

function createAgent($conn, $name, $mail, $uname, $pwd){
  $sql = "INSERT INTO agents (name, username, email, password) VALUES (?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=statementfailed");
    exit();
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $uname, $mail, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../signup.php?error=noneforagent");
  exit();
}

function uidExists($conn, $uname, $mail){
  $sql = "SELECT * FROM clients WHERE username = ? OR email = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=statementfailed!!");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $uname, $mail);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $mail, $uname, $pwd){
  $sql = "INSERT INTO clients (name, username, email, password) VALUES (?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=statementfailed");
    exit();
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $uname, $mail, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../signup.php?error=noneforclient");
  exit();
}

function emptyInputLogin($uname, $pwd){
  $result;
  if (empty($uname) || empty($pwd)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function loginUser($conn, $uname, $pwd){
  $uidExists = uidExists($conn, $uname, $uname);

  if ($uidExists == false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  }

  $pwdHashed = $uidExists["password"];
  $checkPwd = password_verify($pwd, $pwdHashed);
  $len = strlen($pwdHashed);
  if ($checkPwd == false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  }
  else if ($checkPwd == true) {
    session_start();
    $_SESSION["userid"] = $uidExists["id"];
    $_SESSION["useruid"] = $uidExists["username"];
    header("location: ../index.php");
    exit();
  }
}

function loginAgent($conn, $uname, $pwd){
  $uidExists = uidExistsAgent($conn, $uname, $uname);

  if ($uidExists == false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  }

  $pwdHashed = $uidExists["password"];
  $checkPwd = password_verify($pwd, $pwdHashed);
  $len = strlen($pwdHashed);
  if ($checkPwd == false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  }
  else if ($checkPwd == true) {
    session_start();
    $_SESSION["agentid"] = $uidExists["id"];
    $_SESSION["agentuid"] = $uidExists["username"];
    header("location: ../index.php");
    exit();
  }
}

function addRoute($conn, $departureCity, $departureCountry, $arrivingCity, $arrivingCountry, $travelBy){
  $sql = "INSERT INTO routes (departure, departurec, arriving, arrivingc, travelby) VALUES (?,?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../addpage.php?error=statementfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "sssss", $departureCity, $departureCountry, $arrivingCity, $arrivingCountry, $travelBy);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../plane.php");
  exit();
}

function updateRoute($conn, $departureCity, $departureCountry, $arrivingCity, $arrivingCountry, $travelBy, $id){
  $sql = "UPDATE routes SET departure = '$departureCity',departurec = '$departureCountry',arriving = '$arrivingCity',arrivingc = '$arrivingCountry',travelby = '$travelBy' WHERE id = $routeId;";
  if ($conn->query($sql)) {
    header("location: ../plane.php");
    $conn->close();
    exit();
  }
  else {
      header("location: ../plane.php?error=$id");
      $conn->close();
      exit();
  }


}
