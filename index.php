<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='css/homepage.css' media='screen' />

<head>
	<title>Toko Imba</title>	

</head>
	<div class = "page_container">
		<?php $_SESSION['state'] = 2; ?>
		<?php include ("templates/header.php"); ?>
		<?php include ("templates/navigation.php"); ?>
		<?php $_SESSION['state'] = 2; ?>
		<div class = "container">
			<!--<p>Toko Imba</p>-->
		</div>
		
	</div>
		<?php include ("templates/index/footer.php");?>
</html>