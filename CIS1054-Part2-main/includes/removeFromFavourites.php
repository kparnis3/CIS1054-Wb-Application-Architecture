<?php
	session_start();
	include_once('dbh.php');
	error_reporting(E_ALL);
	ini_set("display_errors",TRUE);
	
	$itemID = $_REQUEST['iID'];//retrieves iID from URL
	$userSessionID = $_SESSION['sess_id'];
	/*var_dump($userSessionID);*/
	$userIDValue = implode(',',$userSessionID);
	
	if(isset($_SESSION['sess_id']) && !empty($_SESSION['sess_id']))
	{
		$sqlRemoveFav = "DELETE FROM favourites WHERE iID=$itemID AND userID=$userIDValue";
			
		if(mysqli_query($conn, $sqlRemoveFav))
		{
			header("Location: ../favouritesList.php?iID=$itemID&removeFromFavourites=success");
            exit();
			/*echo "Removed from Favourites List.";*/
		}	
		else
		{
			echo "Error: " . mysqli_error($conn);
		}
	}
	else
	{
		header("Location: ../favouritesList.php?iID=$itemID&removeFromFavourites=error");
        exit();
		/*echo "You are not signed in. Please login or register to use the Favourites List.";*/
	}
?>