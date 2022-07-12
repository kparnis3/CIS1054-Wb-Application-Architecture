<?php
    include 'Nav/header.php';
	$FullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; //gets the full url
	
	$currentUser = $_SESSION['sess_id'];
?>
		<br><br><br><br><br><br><br><br><br><br>
		<div class="changeUserDetailsWrapper">
			<h2>Change Personal Details</h2>
				<form id="changeDetails" action="includes/changeDetails.php" method="POST">
					<input type="text" id="firstName" name="firstName" placeholder="First Name"><br><br>
					<input type="text" id="lastName" name="lastName" placeholder="Last Name"><br><br>
					<input type="email" id="email" name="email" placeholder="Email"><br><br>
					<input type="text" id="contactNo" name="contactNo" placeholder="Contact Number"><br><br>
					<button type="submit" name="submit">Save Details</button>
				</form>

				<?php include 'includes/checks/checkAccount.php' ?>

		</div>
	
		<br><br>
		
		<div class="changePassWrapper">
			<h2>Change Password</h2>
				<form id="changePassword" action="includes/changePassword.php" method="POST">
					<input type="password" id="currentPass" name="currentPass" placeholder="Current Password"><br><br>
					<input type="password" id="changePass" name="changePass" placeholder="New Password"><br><br>
					<button type="submit" name="submit" id="registerSubmit">Save Details</button>
				</form>
				
             <?php include 'includes/checks/checkAccount2.php' ?>
		</div>
		
		<br><br>

		<div class="favListWrapper">
			<h2>Favourites List</h2>
			<p>To view your Favourites List, click the button below.</p>
				<form id="favouritesList" action="favouritesList.php" method="POST">
					<input type="hidden" name="userID" value="<?php echo $currentUser ?>">
					<button type="submit">View Favourites List</button>
				</form>
		</div>

		<br><br>

		<div class="logoutWrapper">
			<h2>Log out</h2>
			<p>To log out, click the button below.</p>
				<form action="includes/logout.php" method="POST">
				<button type="submit" name="submit">Logout</button>
				</form>
		</div>



		<br><br>

<?php
    include 'Nav/footer.php';
?>
