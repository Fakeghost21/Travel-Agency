<?php
include_once 'sidebar_menu.php'
 ?>
	<div class="main_content">
		<div class="main_header">
			<h1 style="text-align:center;"><u>Travel with us!</u></h1>
		</div>
		<section style="height:500px;">
			<div class="wrapper">
				<div class="boxes">
					<div class="slider">
						<input checked="checked" id="id1" name="ani" type="radio">
						<label for="id1"><img src="seashell.jpg" width="100" height="60"></label>
						<img src="seashell.jpg" width="640" height="320">

						<input id="id2" name="ani" type="radio">
						<label for="id2"><img src="spring.jpg" width="100" height="60"></label>
						<img src="spring.jpg" width="640" height="320">

						<input id="id3" name="ani" type="radio">
						<label for="id3"><img src="fall.jpg" width="100" height="60"></label>
						<img src="fall.jpg" width="640" height="320">

						<input id="id4" name="ani" type="radio">
						<label for="id4"><img src="winter.jpg" width="100" height="60"></label>
						<img src="winter.jpg" width="640" height="320">

						<input id="id5" name="ani" type="radio">
						<label for="id5"><img src="winter2.jpg" width="100" height="60"></label>
						<img src="winter2.jpg" width="640" height="320">
					</div>
				</div>
				<input id="myInput" type="text" placeholder="Search.." oninput="myFunction(7)" onfocus="myFunction(7)"
					   style="position: absolute;top: 700px;"><br>
				<div class="custom-select" id="myList" style="margin-top: -19px;">
					<select id="mySelect" onfocus="myFunction(1)" style="position: absolute;top: 730px;margin-left:-60px;">
						<option value="0">Select Continent:</option>
						<option value="1">Europa</option>
						<option value="2">Australia</option>
						<option value="3">Antarctica</option>
						<option value="4">Asia</option>
						<option value="5">Africa</option>
						<option value="6">America de Nord</option>
						<option value="7">America de Sud</option>
					</select>
				</div>

				<!--
				Search help for continent
	-->
				<script>
					$(document).ready(function () {
						$("#myInput").on("keyup", function () {
							let value = $(this).val().toLowerCase();
							if (value.length == 0) myFunction(7);
							else
								$("#myList option").filter(function () {
									$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
								});
							$("#myList select").filter(function () {
								$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
							});

						});
					});
				</script>

				<script>
					function myFunction(Nr) {
						document.getElementById("mySelect").size = Nr;
					}
				</script>
        <?php
        include_once 'footer.php'
         ?>
			</div>
		</section>
	</div>
</body>
</html>
