<?php
  session_start();


    if (isset($_POST['submit'])){ //if normal access
        include_once 'dbh.php';
        
        $New_Firstname= $_POST['firstName'];
        $New_Lastname = $_POST['lastName'];
        $New_eml = $_POST['email'];
        $New_num = $_POST['contactNo'];

        $email = "%".$New_eml;
        $email =  str_replace("@","%",$email);
      
        $resulttwo = mysqli_query($conn,  "SELECT * FROM login WHERE usr_email LIKE '$email';"); //query database
        $resultone = mysqli_query($conn,  "SELECT * FROM login WHERE usr_nmb='$New_num';");
   
        if(empty($New_Firstname) || empty($New_Lastname) || empty($New_eml) || empty($New_num)){   //if empty  
            header("Location: ../Account.php?changedetails=empty");
            exit();
        }
        elseif(mysqli_num_rows($resultone) != 0) {
            header("Location: ../Account.php?changedetails=numbexists");
            exit();   
        }
        else  if(mysqli_num_rows($resulttwo) != 0) {
            header("Location: ../Account.php?changedetails=mailexists");
            exit();
        
        }   
        elseif(empty($_SESSION['sess_email'])) { //not logged in
                header("Location: ../Account.php?changedetails=notinsess");
                exit();
            }
        elseif((!preg_match("/^([a-zA-Z' ]+)$/",$New_Firstname)) || (!preg_match("/^([a-zA-Z' ]+)$/",$New_Lastname))){ //if its an unvalid name
            header("Location: ../Account.php?changedetails=unvalidnme");
            exit();
        }
        elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){ //unvalid email
            header("Location: ../Account.php?changedetails=unvalideml");
            exit();
        }
        elseif((!preg_match("/^[0-9]/", $New_num)) || (strlen($New_num) != 8)) { //isnt a phone number
           header("Location: ../Account.php?changedetails=unvalidnum");
           exit();
         
        }        
        else{
  
        $userSessionID = $_SESSION['sess_id'];
        $userIDValue = implode(',',$userSessionID);

        $usr_pass = mysqli_real_escape_string($conn,$currentPass);

        $sql = "UPDATE login SET usr_name='$New_Firstname', usr_surname='$New_Lastname', usr_email='$New_eml', usr_nmb='$New_num' WHERE usr_id = '$userIDValue';"; //query database
    
        $result = mysqli_query($conn, $sql);


            header("Location: ../Account.php?changedetails=success");
            exit();
        
  
    }
}
    else{
        header("Location: ../Account.php?changedetails=error");
        exit();
    }