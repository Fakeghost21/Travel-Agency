<?php
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/3639a4869c.js" crossorigin="anonymous"></script>
	<scrpit typeof="text/javascript" src="scripts.js"></scrpit>
  <script type="text/javascript" src="form_validation.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="jquery-3.6.0.min.js"></script>
</head>
<body style='min-height:100vh;'>
	<nav class='sidebar'>
		<header>
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="Sun_logo.png" alt="Logo1" style="width:100px;height:100px">
					</div>
					<div class="flip-box-back">
						<img src="Travel_agency_logo.png" alt="Logo2" style="width:100px;height:100px">
					</div>
				</div>
			</div>
			|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
		</header>
		<ul>
			<li><a href="index.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
			<li>
				<a href="#"><i class="fas fa-id-card"></i>Profile</a>
				<ul id="accounts_submenu" class="submenu">
					<?php
					if (isset($_SESSION["useruid"])) {
						echo "<li><a href='myprofile.php'><i class='fas fa-address-book'></i>My profile</a></li>";
						echo "<li><a href='includes/logout.inc.php'><i class='far fa-address-book'></i>Log out</a></li>";
					}
					else if (isset($_SESSION["agentuid"])) {
						echo "<li><a href='myclients.php'><i class='fas fa-address-book'></i>My clients</a></li>";
						echo "<li><a href='includes/logout.inc.php'><i class='far fa-address-book'></i>Log out</a></li>";
					}
					else{
						echo "<li><a href='login.php'><i class='fas fa-address-book'></i>Login</a></li>";
						echo "<li><a href='signup.php'><i class='far fa-address-book'></i>Sign up</a></li>";
					}
					 ?>
				</ul>

			</li>
			<li><a href="plans.php"><i class="fas fa-calendar"></i>Plans</a></li>

			<li><a href="#"><i class="fas fa-cog"></i>Settings</a></li>
			<li>
				<a href="#"><i class="fas fa-map-signs"></i>Travel</a>
				<ul id="travel_submenu" class="submenu">
					<li><a href="ship.php"><i class="fas fa-ship"></i>By ship</a></li>
					<li><a href="plane.php"><i class="fas fa-plane"></i>By plane</a></li>
					<li><a href="#"><i class="fas fa-train"></i>By train</a></li>
					<li><a href="#"><i class="fas fa-bus"></i>By car</a></li>
					<?php
					if (isset($_SESSION["useruid"])) {
						echo "<li><a href='memories.php'><i class='fas fa-camera'></i>Memories</a></li>";
					}
					 ?>
				</ul>
			</li>
			<li><a href="#"><i class="fas fa-atlas"></i>News</a></li>
			<li><a href="#"><i class="fas fa-question-circle"></i>About us</a></li>
			<li><a href="#"><i class="fas fa-sliders"></i>Services</a></li>
			<li><a href="review.php"><i class="fas fa-envelope"></i>Review us</a></li>
		</ul>
	</nav>
