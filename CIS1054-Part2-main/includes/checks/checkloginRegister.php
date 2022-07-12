<?php //checks url for errors
			 if((strpos($FullUrl, "login=empty")==true) || (strpos($FullUrl, "login=invalid")==true)) { //checks url for valid usr or pass
		     	echo "<p>Incorrect username or password!<p>";
		   }
		    if(strpos($FullUrl, "login=alloggedin1")==true) { //checks url if user is already logged in
			    echo "<p>Already logged in!<p>";
	       }
		   if(strpos($FullUrl, "login=logout")==true) { //checks url if user just logged out
	  		echo "<p>You have logged out!<p>";
	       } 
?>