<<<<<<< HEAD
<!DOCTYPE html>
<html>
	<head>
	<title>Page Title</title>
	</head>
	<body>
		<?php session_start(); ?>

		<form id="changeDetails" action="processrequest.php" method="POST">
			<input type="text" id="Username" name="Username" placeholder="Username"><br><br>
			<input type="text" id="age" name="age" placeholder="age"><br><br>
		<button type="submit" name="submit">Save Details</button>
		<br><br>
		<?php include 'readsession.php' ?>
		</form>

	</body>
=======
<!DOCTYPE html>
<html>
	<head>
	<title>Page Title</title>
	</head>
	<body>
		<?php session_start(); ?>

		<form id="changeDetails" action="processrequest.php" method="POST">
			<input type="text" id="Username" name="Username" placeholder="Username"><br><br>
			<input type="text" id="age" name="age" placeholder="age"><br><br>
		<button type="submit" name="submit">Save Details</button>
		<br><br>
		<?php include 'readsession.php' ?>
		</form>

	</body>
>>>>>>> 79f6c1d315dbc03540999efd779572f6f26ca731
</html>