
<?php include 'includes/favoritesListlogic.php' ?>

<html>
	<head>
		<link href="PageStyles/pagesStyling.css" rel="stylesheet">
	</head>
	<body>
		<br><br><br><br><br><br><br><br><br><br>
			<div class="favouritesWrapper">
				<h1>Yours Favourites</h1>
				<?php 
					while($row = mysqli_fetch_assoc($favouritesQuery))
					{?>
						<h2>Item: <?php echo $row['iName']; ?></h2> 
						<p>Ingredients: <?php echo $row['iIngre']; ?></p>
						<p>Price: €<?php echo $row['iPrice']; ?></p> <br>
						<?php $removeItemByID = $row["iID"];?>
						<form id="individualItemDisplay" action="includes/removeFromFavourites.php" method="POST">	
							<input type="hidden" name="iID" value="<?php echo $removeItemByID?>">
							<button type="submit">Remove</button>
						</form>	
					<?php } ?>	
				<?php ?>

				<?php
					mysqli_free_result($favouritesQuery);
					mysqli_close($conn);
				?>
			</div>
			
        <br><br>

		<div class="favListWrapper">
			<h2>Mail List</h2>
			<p>To send the entire list to your email, click the button below.</p>
				<form action="includes/sendList.php" method="POST">
				    <input type="email" id="email" name="email" placeholder="Email"><br><br>
					<input type="hidden" name="userID" value="<?php echo $currentUser ?>">
					<button type="submit" name="submit" >Send favourites List</button>
				</form>

				<?php include 'includes/checks/checkFavlist.php' ?>
		</div>

		<br><br><br><br><br><br><br><br><br><br>
	</body>
</html>	

<?php
    include 'Nav/footer.php';
?>