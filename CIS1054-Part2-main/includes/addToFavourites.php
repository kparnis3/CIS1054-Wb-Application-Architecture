<?php
	session_start();
	include_once('dbh.php');
	error_reporting(E_ALL);
	ini_set("display_errors",TRUE);
	
	$itemID = $_REQUEST['iID'];//retrieves iID from URL
	$userSessionID = $_SESSION['sess_id'];
	/*var_dump($userSessionID);*/
	$userIDValue = implode(',',$userSessionID);
	
	if(isset($_SESSION['sess_id'])  && !empty($_SESSION['sess_id'])) 
	{
		$sqlAddFav = "INSERT INTO favourites (iID, userID) VALUES ('$itemID', '$userIDValue');";	
		if(mysqli_query($conn, $sqlAddFav))
		{
			header("Location: ../menuItem.php?iID=$itemID&addToFavourites=success");
            exit();
			/*echo "Added to Favourites List.";*/
		}	
		else
		{
			echo "Error: " . mysqli_error($conn);
		}
	}
	else
	{
		header("Location: ../menuItem.php?iID=$itemID&addToFavourites=error");
        exit();
		/*echo "You are not signed in. Please login or register to use the Favourites List.";*/
	}
?>