<?php include 'includes/menuitemlogic.php'; ?>

<html>
	<head>
		<link href="PageStyles/pagesStyling.css" rel="stylesheet">
		<link href="PageStyles/menu.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>

	<body>
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="itemWrapper">
			<?php if($itemFlag == 1): ?>
				<h2><?php echo $individualItem['iName']; ?></h2> 
				<p>Description: <?php echo $individualItem['iDesc']; ?></p> <br>
				<p>Ingredients: <?php echo $individualItem['iIngre']; ?></p> <br>
				<p>Price: €<?php echo $individualItem['iPrice']; ?></p> <br>
				<?php $sendItemID = $individualItem['iID'];?>
				<form id="individualItemDisplay" action="includes/addToFavourites.php" method="POST">	
					<input type="hidden" name="iID" value="<?php echo $sendItemID?>">
					<button type="submit">Add To Favourites</button>
				</form>	
			<?php else: ?>
				<h2>No such item is available at the moment. Sorry!</h2>
			<?php endif; ?>	
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br>
	</body>
</html>

<?php
    include 'Nav/footer.php';
?>