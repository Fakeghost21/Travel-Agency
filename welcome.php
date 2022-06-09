<html>
<body>

Welcome <?php echo $_POST["name2"]; ?><br>
Your email address is: <?php echo $_POST["mail"]; ?>

<form action="includes/signup.inc.php" method="post">
  <input type="text" name="name" placeholder="full name">
  <input type="text" name="email" placeholder="email">
  <input type="password" name="pwd" placeholder="Password...">
  <input type="password" name="pwdrepeat" placeholder="Repeat password">
  <button type="submit" name="submit"> Sign Up</button>

</form>

</body>
</html>
