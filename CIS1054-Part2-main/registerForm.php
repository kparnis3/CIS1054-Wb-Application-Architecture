<?php
    include 'Nav/header.php';
?>

<?php
   $_POST['name'] = $_SESSION['sess_name'];
   $_POST['lastName'] = $_SESSION['sess_sur'];
   $_POST['email'] = $_SESSION['sess_email'];
   $_POST['Contactno'] = $_SESSION['sess_num'];
?>
	
<br><br><br><br><br><br><br><br>
<div class="registerSection">

	<h1>Thank You for registering</h1>

		<p>Here is the information you have submitted:</p>

		<ol>
			<em>Name:</em> <?php echo $_POST['name']; ?> <br>
			<em>Surname:</em> <?php echo $_POST["lastName"]?> <br>
			<em>Email:</em> <?php echo $_POST["email"]?> <br>
			<em>Contact No:</em> <?php echo $_POST["Contactno"]?> <br>
		</ol>

        </div>
		
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
    include 'Nav/footer.php';
?>        