<?php
	include 'Nav/header.php';
	include_once('includes/dbh.php');
	
	error_reporting(E_ALL);
	ini_set("display_errors",TRUE);	
	
	$sqlMenuItems = 'SELECT iID, iName FROM menu_item;';
	$menuItemsQuery = mysqli_query($conn, $sqlMenuItems);
	$noOfMenuItems = mysqli_num_rows($menuItemsQuery);

?> 