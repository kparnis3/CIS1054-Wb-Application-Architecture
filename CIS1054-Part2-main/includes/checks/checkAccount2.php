<?php //checks url for errors
       if(strpos($FullUrl, "changepass=empty")==true) { 
            echo "<p>Not all the fields where filled!<p>";
       }
       elseif(strpos($FullUrl, "changepass=notinsess")==true){
            echo "<p>You are not logged in!<p>";
       }
       elseif(strpos($FullUrl, "changepass=success")==true){
        echo "<p>You have successfully changed your password!<p>";
       }
       elseif(strpos($FullUrl, "changepass=fail")==true){
        echo "<p>Incorrect password!<p>";
       }
?>