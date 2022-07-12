<?php
session_start();

if (isset($_POST['submit'])){ //if normal access
    include_once 'dbh.php';
    $eml = $_POST['email'];
 
    $email = "%".$eml;
    $email =  str_replace("@","%",$eml);

if(empty($eml)){ //if anything is empty
    header("Location: ../favouritesList.php?send=empty");
    exit();
} 
elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){ //unvalid email
    header("Location: ../favouritesList.php?send=invalideml");
    exit();
}
else{

$userSessionID = $_SESSION['sess_id'];
$userIDValue = implode(',',$userSessionID);
  
  
$sqlGetFavourites = "SELECT * FROM menu_item 
INNER JOIN favourites ON (menu_item.iID=favourites.iID) AND favourites.userID=$userIDValue;";
$favouritesQuery = mysqli_query($conn, $sqlGetFavourites);
$noOfMenuItems = mysqli_num_rows($favouritesQuery);
$message = ""; 

if($noOfMenuItems < 1){
  header("Location: ../favouritesList.php?send=nolist");
}
else{

  while($row = mysqli_fetch_assoc($favouritesQuery)){
	 
		 $message.="Item: ".$row['iName']."\n";
		 $message.="Ingredients: ".$row['iIngre']."\n";
		 $message.="Price: €".$row['iPrice']."\n\n";
  }
 

  $headers = "From: Fork()";
  $txt = "You have received your favorite list."."\n"."\n\n".$message;
  $subject ="Favorite List";
  mail($eml,$subject,$txt,$headers);

  header("Location: ../favouritesList.php?send=success");
  exit();
}
}
}
else{
    header("Location: ../favouritesList.php?send=error");
    exit();
}

?>