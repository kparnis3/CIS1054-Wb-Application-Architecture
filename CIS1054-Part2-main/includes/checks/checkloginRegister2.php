<?php //checks url for errors
		   if(strpos($FullUrl, "signup=empty")==true) { 
                echo "<p>Not all the fields where filled!<p>";
		   }
		   elseif(strpos($FullUrl, "signup=unvalidnme")==true) {
			    echo "<p>The name is unvalid!<p>";
		   }
		   elseif(strpos($FullUrl, "signup=unvalideml")==true) {
		    	echo "<p>The email is unvalid!<p>";
	 	   }
		   elseif(strpos($FullUrl, "signup=unvalidnum")==true) {
			    echo "<p>Unvalid phonenumber!<p>";
	       }
		   elseif(strpos($FullUrl, "signup=alloggedin1")==true) {
			echo "<p>Already logged in!<p>";
		   }
		   elseif(strpos($FullUrl, "signup=numexists")==true) {
			echo "<p>ERROR: Number already exists<p>";
		   }
		   elseif(strpos($FullUrl, "signup=mailexists")==true) {
			echo "<p>ERROR: Email already exists<p>";
		   }
?>