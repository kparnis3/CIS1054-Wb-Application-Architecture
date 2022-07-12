<?php
    include 'Nav/header.php';
	include_once('includes/dbh.php');
	
	error_reporting(E_ALL);
	ini_set("display_errors",TRUE);
	
	$itemFlag = 1; //Determines whether to render page or not
	$itemID = $_REQUEST['iID'];//retrieves iID from URL

	$sqlItemDetails = "SELECT * FROM menu_item;";
	$individualItemQuery = mysqli_query($conn, $sqlItemDetails);
	
	$sqlIndividualItemByID = "SELECT * FROM menu_item WHERE iID=?;";
	$menuDBStatement = mysqli_stmt_init($conn);//Initializes a statement and returns an object for use
	
	if(!mysqli_stmt_prepare($menuDBStatement, $sqlIndividualItemByID))
	{
        echo "An Error Has Occurred!!";
    } 
    else
	{
        mysqli_stmt_bind_param($menuDBStatement, "i", $itemID);
        mysqli_stmt_execute($menuDBStatement);
        $itemData = mysqli_stmt_get_result($menuDBStatement);
        $individualItem = mysqli_fetch_assoc($itemData);
                
        if(mysqli_fetch_lengths($itemData) > 0)
		{
            $itemFlag = 1;
        }
        else
		{
            $itemFlag=0;
        }
    }
	
	mysqli_free_result($individualItemQuery);
	mysqli_close($conn);
?>