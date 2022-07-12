<<<<<<< HEAD
  <?php
	if ((!empty($_SESSION['sess_username'])) || (!empty($_SESSION['sess_age'])  ))
	{
		$user = $_SESSION['sess_username'];
		$age = $_SESSION['sess_age'];

		echo $user;
		echo "<br>";
		echo "<br>";
		echo $age;
	}
=======
  <?php
	if ((!empty($_SESSION['sess_username'])) || (!empty($_SESSION['sess_age'])  ))
	{
		$user = $_SESSION['sess_username'];
		$age = $_SESSION['sess_age'];

		echo $user;
		echo "<br>";
		echo "<br>";
		echo $age;
	}
>>>>>>> 79f6c1d315dbc03540999efd779572f6f26ca731
?>