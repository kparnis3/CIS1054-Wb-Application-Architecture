<?php
  session_start();


    if (isset($_POST['submit'])){ //if normal access
        include_once 'dbh.php';
        
        $currentPass= $_POST['currentPass'];
        $changePass = $_POST['changePass'];
         
        if(empty($changePass) || empty($currentPass)){   //if empty  
            header("Location: ../Account.php?changepass=empty");
            exit();
        }
        elseif(empty($_SESSION['sess_email'])) { //not logged in
                header("Location: ../Account.php?changepass=notinsess");
                exit();
            }    
        else{
  
        $userSessionID = $_SESSION['sess_id'];
        $userIDValue = implode(',',$userSessionID);


        $usr_pass = mysqli_real_escape_string($conn,$currentPass);

        $sql = "UPDATE login SET usr_pwd='$changePass' WHERE usr_id = '$userIDValue' AND usr_pwd = '$currentPass';"; //query database
    
        $result = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($result);
          
        if($count <= 1) { //should find one row
            header("Location: ../Account.php?changepass=success");
            exit();
        }else {
            header("location: ../Account.php?changepass=fail");
        }
         
       }
  
    }
    else{
        header("Location: ../Account.php?changepass=error");
        exit();
    }