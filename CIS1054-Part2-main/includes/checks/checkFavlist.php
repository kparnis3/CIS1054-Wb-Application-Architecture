<?php //checks url for errors
		   if(strpos($FullUrl, "send=empty")==true) { 
                echo "<p>Not all the fields where filled!<p>";
		   }
		   elseif(strpos($FullUrl, "send=nolist")==true){
			    echo "<p>You don't have a favorites list! <p>";
		   }
		   elseif(strpos($FullUrl, "send=success")==true){
			echo "<p>You have successfully sent your favorites list!<p>";
	       }
		   elseif(strpos($FullUrl, "send=error")==true){
			echo "<p>Error!<p>";
	       }
		   elseif(strpos($FullUrl, "send=invalideml")==true){
			echo "<p>Email is unvalid!<p>";
	       }
		
?>