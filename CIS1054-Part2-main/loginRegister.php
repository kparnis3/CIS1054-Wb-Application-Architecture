<?php
    include 'Nav/header.php';
	$FullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; //gets the full url
?>

<br><br><br><br><br><br><br><br>
		<!-- login menu -->
		<div class="loginSection">
			<h1>Login</h1>

			<form action="includes/login.php" method="POST">
			  <input type="text" id="email" name="email" placeholder="Email"><br><br>
			  <input type="password" if="pwd" name="pwd" placeholder="Password"><br><br>
			  <button type="submit" name="submit" id="loginSubmit">Login</button>
			</form>

			<?php include 'includes/checks/checkloginRegister.php' ?>
		</div>	
		
		<br><br>
        	<!-- register menu -->
		<div class="registerSection">
			<h1>Register</h1>
			<form id="registerForm" action="includes/register.php" method="POST">
				
				<input type="text" id="firstName" name="firstName" placeholder="First Name"><br><br>
				<input type="text" id="lastName" name="lastName" placeholder="Last Name"><br><br>
				<input type="email" id="email" name="email" placeholder="Email"><br><br>
				<input type="text" id="contactNo" name="contactNo" placeholder="Contact Number"><br><br>
				<input type="password" id="pwd" name="pwd" placeholder="Password"><br><br>
		        <br>
				<button type="submit" name="submit" id="registerSubmit">Sign up</button>
			</form>	

			<?php include 'includes/checks/checkloginRegister2.php' ?>


		</div>

	
		
		<br><br>


<?php
    include 'Nav/footer.php';
?>