<?php
    include 'Nav/header.php';
	include_once('includes/dbh.php');
	$FullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	error_reporting(E_ALL);
	ini_set("display_errors",TRUE);
	
	$userSessionID = $_SESSION['sess_id'];
	/*var_dump($userSessionID);*/
	$userIDValue = implode(',',$userSessionID);
	
	if(isset($_SESSION['sess_id']))
	{	
		$sqlGetFavourites = "SELECT DISTINCT * FROM menu_item 
		INNER JOIN favourites ON (menu_item.iID=favourites.iID) AND favourites.userID=$userIDValue;";
		$favouritesQuery = mysqli_query($conn, $sqlGetFavourites);
		$noOfMenuItems = mysqli_num_rows($favouritesQuery);
	}
?>