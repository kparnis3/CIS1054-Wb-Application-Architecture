<?php //checks url for errors
		   if(strpos($FullUrl, "changedetails=empty")==true) { 
                echo "<p>Not all the fields where filled!<p>";
		   }
		   elseif(strpos($FullUrl, "changedetails=notinsess")==true){
			    echo "<p>You are not logged in!<p>";
		   }
		   elseif(strpos($FullUrl, "changedetails=success")==true){
			echo "<p>You have successfully changed your Personal Details!<p>";
	       }
		   elseif(strpos($FullUrl, "changedetails=error")==true){
			echo "<p>Error!<p>";
	       }
		   elseif(strpos($FullUrl, "changedetails=mailexists")==true){
			echo "<p>Email already taken!<p>";
	       }
		   elseif(strpos($FullUrl, "changedetails=numbexists")==true){
			echo "<p>Number already taken!!<p>";
	       }
		   elseif(strpos($FullUrl, "changedetails=unvalidnme")==true){
			echo "<p>Name or Surname unvalid!<p>";
	       }
		   elseif(strpos($FullUrl, "changedetails=unvalideml")==true){
			echo "<p>Email is unvalid!<p>";
	       }
		   elseif(strpos($FullUrl, "changedetails=unvalidnum")==true){
			echo "<p>Number is unvalid!!<p>";
	       }
?>