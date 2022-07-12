<?php
    include 'Nav/header.php';
	$FullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; //gets the full url
?>

		<br><br><br><br><br><br><br><br>
		
		<div class="contactForm">
			<h1>Contact Us</h1>
			<form action="includes/contactForm.php" method="POST">

				<input type="text" id="firstName" name="firstName" placeholder="First Name"><br><br>
				<input type="text" id="lastName" name="lastName" placeholder="Last Name"><br><br>
				<input type="text" id="email" name="email" placeholder="Email"><br><br>
				<input type="text" id="contactNo" name="contactNo" placeholder="Contact Number"><br><br>
				<input type="text" id="subject" name="subject" placeholder="Book/Query/Complaint"><br><br>
				  
				<textarea id="messageArea" name="messageArea" placeholder="Enter your message here...."></textarea><br><br>
				<button type="submit" name="submit">Send</button><br><br>
			</form> 	

			<?php include 'includes/checks/checkContact.php' ?>
		</div>
		
		<br><br>

 <?php
    include 'Nav/footer.php';
?>