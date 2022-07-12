<?php //checks url for errors
		   if(strpos($FullUrl, "contact=empty")==true) { 
                echo "<p>Not all the fields where filled!<p>";
		   }
		   elseif(strpos($FullUrl, "contact=invalidnme")==true){
			    echo "<p>Name is unvalid!<p>";
		   }
		   elseif(strpos($FullUrl, "contact=invalideml")==true){
			echo "<p>Error invalid email!<p>";
	       }
		   elseif(strpos($FullUrl, "contact=invalidnmb")==true){
			echo "<p>Error invalid number!<p>";
	       }
		   elseif(strpos($FullUrl, "contact=success")==true){
			echo "<p>You have successfully contacted us!<p>";
	       }
           elseif(strpos($FullUrl, "contact=error")==true){
			echo "<p>Error!<p>";
	       }
		
?>