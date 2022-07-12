<?php
	$login = 0;
	if ((!empty($_SESSION['sess_name'])) || (!empty($_SESSION['sess_email'])  ))
	{ 
		//changes nav if logged in
		$login = 1;
	} 
?>