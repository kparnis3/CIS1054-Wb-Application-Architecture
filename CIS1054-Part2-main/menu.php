<?php
	include 'includes/menulogic.php';
?>


<html>
	<head>
		<link href="PageStyles/pagesStyling.css" rel="stylesheet">
		<link href="PageStyles/menu.css" rel="stylesheet">
	</head>

	<body>
		<<br><br><br><br><br><br><br>
		<div class="fullMenu">
			<?php while($row = mysqli_fetch_assoc($menuItemsQuery)){?>
				<br><br>
				<div class="menuWrapper">
					<img id="itemImage" src="Images/<?php echo $row["iName"]?>.jpg" alt='Item Image'/>
					<p><?php printf("%s ", $row["iName"]);?></p>
					<?php $sendItemID = $row["iID"];?>
					<form id="detailsButton" method="GET" action="menuItem.php?iID=">
						<input type="hidden" name="iID" value="<?php echo $sendItemID?>">
						<button type="submit">Details</button>
					</form>	
				</div>
				<br><br>
			<?php } ?>
			
			<?php
				mysqli_free_result($menuItemsQuery);
				mysqli_close($conn);
			?>
		</div>	
		<br><br><br><br>
	</body>	
</html>

<?php
	include 'Nav/footer.php';
?>