<?php

if (isset($_POST['submit'])){ //if normal access
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $eml = $_POST['email'];
    $nmb = $_POST['contactNo'];
    $message = $_POST['messageArea'];
    $subject = $_POST['subject'];

    $email = "%".$eml;
    $email =  str_replace("@","%",$email);
    

if(empty($firstname) || empty($lastname) || empty($eml) || empty($nmb) || empty($message)){ //if anything is empty
    header("Location: ../contact.php?contact=empty");
    exit();
} 
elseif((!preg_match("/^([a-zA-Z' ]+)$/",$firstname)) || (!preg_match("/^([a-zA-Z' ]+)$/",$lastname))){ //if its an unvalid name
    header("Location: ../contact.php?contact=invalidnme");
    exit();
}
elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){ //unvalid email
    header("Location: ../contact.php?contact=invalideml");
    exit();
}
elseif((!preg_match("/^[0-9]/", $nmb)) || (strlen($nmb) != 8)) { //isnt a phone number
   header("Location: ../contact.php?contact=invalidnmb");
   exit();
 
}  
else{
   $mailTo = "infoForkrestaurant@gmail.com";
   $headers = "From: ".$eml;
   $txt = "You have received an e-mail from ".$firstname." ".$lastname."\n"."Client email: ".$eml."\n"."Client number: ".$nmb.".\n\n".$message;
   mail($mailTo,$subject,$txt,$headers);
   header("Location: ../contact.php?contact=success");
   exit();
}
}
else{
    header("Location: ../contact.php?contact=error");
    exit();
}