<?php
    session_start(); //keeps user is a session
?>

<!DOCTYPE html>
<html>

<?php
$login = 0;
if ((!empty($_SESSION['sess_name'])) || (!empty($_SESSION['sess_email']))) { //changes nav if logged in
   $login = 1;
} 
?>

	<head>
		<title>fork()</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
		<link href="PageStyles/About.css" rel="stylesheet">
		<link href="PageStyles/pagesStyling.css" rel="stylesheet">
		<link href="Nav/headerFooter.css" rel="stylesheet">
		<script src="Nav/headerFooter.js"></script>
	</head>

	<body>
		<!-- Navigation -->
		<?php
		if ($login == 1) {?> <!-- logged in -->
		<nav class="menu">
			<label for="hamburger" >&#9776;</label>
				<input type="checkbox" id="hamburger" onclick="burgshow()">	

			<ul class="menu__list">
				<p class="Maintext"></p>
				<a href="About.php" class="menu__link r-link text-align m" >About</a>
				<a href="contact.php" class="menu__link r-link text-a m">Contact</a>
				<a href="menu.php" class="menu__link r-link text-align m">Menu</a>
				<a href="Account.php" class="menu__link r-link m">Account</a>
				
				
			</ul>
			
			<div id="myLinks">
				<a href="About.php" class="menu__link r-link text-align top burg">About</a>
				<a href="contact.php" class="menu__link r-link text-a burg">Contact</a>
				<a href="menu.php" class="menu__link r-link text-align burg">Menu</a>
				<a href="Account.php" class="menu__link r-link burg">Account</a>
			  </div>

			  <body onresize="burghide()"></body>
		</nav>
		<?php } else { ?>
			<nav class="menu"> <!--not logged in -->
				<label for="hamburger" >&#9776;</label>
					<input type="checkbox" id="hamburger" onclick="burgshow()">	

				<ul class="menu__list">
					<p class="Maintext"></p>
					<a href="About.php" class="menu__link r-link text-align m" >About</a>
					<a href="contact.php" class="menu__link r-link text-a m">Contact</a>
					<a href="menu.php" class="menu__link r-link text-align m">Menu</a>
					<a href="loginRegister.php" class="menu__link r-link m">Login/Register</a>
					
					
				</ul>
				
				<div id="myLinks">
					<a href="About.php" class="menu__link r-link text-align top burg">About</a>
					<a href="contact.php" class="menu__link r-link text-a burg">Contact</a>
					<a href="menu.php" class="menu__link r-link text-align burg">Menu</a>
					<a href="loginRegister.php" class="menu__link r-link burg">Login/Register</a>
				  </div>

				  <body onresize="burghide()"></body>
			</nav>
		<?php } ?>