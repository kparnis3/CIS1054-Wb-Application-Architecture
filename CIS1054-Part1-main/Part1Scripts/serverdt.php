<<<<<<< HEAD
<!DOCTYPE html>
<html> 
	<head>
		<meta charset="UTF-8">
		<title>serverdt.php</title> 
	</head>

	<body> 
		<?php
			$dateTime = new DateTime(); 
			$timezone = date_default_timezone_get();

			echo "Server's Timezone: " . $timezone . "<br>Current Time: " . $dateTime->format('H:i:s') . "<br>Current Date: " . $dateTime->format('d-m-y');
		?>
	</body>
=======
<!DOCTYPE html>
<html> 
	<head>
		<meta charset="UTF-8">
		<title>serverdt.php</title> 
	</head>

	<body> 
		<?php
			$dateTime = new DateTime(); 
			$timezone = date_default_timezone_get();

			echo "Server's Timezone: " . $timezone . "<br>Current Time: " . $dateTime->format('H:i:s') . "<br>Current Date: " . $dateTime->format('d-m-y');
		?>
	</body>
>>>>>>> 79f6c1d315dbc03540999efd779572f6f26ca731
</html>