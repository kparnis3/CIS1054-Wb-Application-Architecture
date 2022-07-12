
<?php
  session_start();

    if (isset($_POST['submit']))//if normal access
{  
        include_once 'dbh.php';
        
        $first = $_POST['firstName'];
        $last = $_POST['lastName'];
        $eml = $_POST['email'];
        $num = $_POST['contactNo'];
        $psw = $_POST['pwd'];
        
        $usr_email = mysqli_real_escape_string($conn,$eml);
        $usr_num = mysqli_real_escape_string($conn,$num);

        $email = "%".$eml;
        $email =  str_replace("@","%",$email);
       
        $resulttwo = mysqli_query($conn,  "SELECT * FROM login WHERE usr_email LIKE '$email';"); //query database
        $resultone = mysqli_query($conn,  "SELECT * FROM login WHERE usr_nmb='$num';");
   
        if(empty($first) || empty($last) || empty($eml) || empty($num) || empty($psw)){ //if anything is empty
            header("Location: ../loginRegister.php?signup=empty");
            exit();
        }
     
        elseif(mysqli_num_rows($resulttwo) != 0) {
            header("Location: ../loginRegister.php?signup=mailexists");
            exit();   
        }   
        else{
        if(mysqli_num_rows($resultone) != 0) {
                header("Location: ../loginRegister.php?signup=numexists");
                exit();
        }
        elseif((!preg_match("/^([a-zA-Z' ]+)$/",$first)) || (!preg_match("/^([a-zA-Z' ]+)$/",$last))){ //if its an unvalid name
            header("Location: ../loginRegister.php?signup=unvalidnme");
            exit();
        }
        elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){ //unvalid email
            header("Location: ../loginRegister.php?signup=unvalideml");
            exit();
        }
        elseif((!preg_match("/^[0-9]/", $num)) || (strlen($num) != 8)) { //isnt a phone number
            header("Location: ../loginRegister.php?signup=unvalidnum");
            exit();
         
        }
        elseif ((!empty($_SESSION['sess_name']) || (!empty($_SESSION['sess_eml'])))) { //if a session is already in progress
            header("Location: ../loginRegister.php?signup=alloggedin1");
            exit();
        }
        else{
        $usr_first = mysqli_real_escape_string($conn,$first); //database protection
        $usr_last = mysqli_real_escape_string($conn,$last);
       
        $usr_pass = mysqli_real_escape_string($conn,$psw);
    
        $sql = "INSERT INTO login(usr_name,usr_surname,usr_email,usr_nmb,usr_pwd) VALUES ('$usr_first',' $usr_last',' $usr_email','$usr_num','$usr_pass');";
    
        $result = mysqli_query($conn, $sql); //query the database
      
        $_SESSION['sess_name'] = $first; //log in user
        $_SESSION['sess_sur'] = $last;
        $_SESSION['sess_email'] = $eml;
        $_SESSION['sess_num'] = $num;
        
        $sql = "SELECT usr_id FROM login WHERE usr_email LIKE '$email';";
		   $result = mysqli_query($conn, $sql);
		   $resultArr = mysqli_fetch_assoc($result);
		   $_SESSION['sess_id'] = $resultArr;

        header("Location: ../registerForm.php");
        exit();
        }
    
    }
}
    else{
        header("Location: ../loginRegister.php?signup=error");
        exit();
    }

 