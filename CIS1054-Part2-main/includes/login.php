<?php
  session_start();


    if (isset($_POST['submit'])){ //if normal access
        include_once 'dbh.php';

        $emltemp = $_POST['email'];
        $psw = $_POST['pwd'];

        $eml = "%".$emltemp;
        $eml =  str_replace("@","%",$eml);
      
        if(empty($eml) || empty($psw)){   //if empty  
            header("Location: ../loginRegister.php?login=empty");
            exit();
        }
        elseif((!empty($_SESSION['sess_name'])) || (!empty($_SESSION['sess_eml']))) { //already a session ongoing
                header("Location: ../loginRegister.php?login=alloggedin1");
                exit();
            }    
        else{
            $usr_email = mysqli_real_escape_string($conn,$eml); //database protection
            $usr_pass = mysqli_real_escape_string($conn,$psw);

        $sql = "SELECT * FROM login WHERE usr_email LIKE '$eml' AND usr_pwd = '$psw';"; //query database
    
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
          
        if($count == 1) { //should find one row
           $_SESSION['sess_email'] = $emltemp; //logs in user
		   
		   $sql = "SELECT usr_id FROM login WHERE usr_email LIKE '$eml';";
		   $result = mysqli_query($conn, $sql);
		   $resultArr = mysqli_fetch_assoc($result);
		   $_SESSION['sess_id'] = $resultArr;
           
           header("location: ../About.php");
        }else {
            header("location: ../loginRegister.php?login=invalid");
        }

        exit();
    }
    }
    else{
        header("Location: ../loginRegister.php?loginerror1=error");
        exit();
    }
