<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='css/homepage.css' media='screen' />

<head>
	<title>Toko Imba</title>	

</head>
	<div class = "page_container">
		<?php 
			session_start();
			$_SESSION['state'] = 2;
			
			if($_SESSION['state'] == 1){
				include ("../templates/header.php");
				include ("../templates/navigation.php"); 
			}
			else{
				include ("templates/header.php");
				include ("templates/navigation.php"); 
			}
		?>
		<div class = "container">
			<!--<p>Toko Imba</p>-->
		</div>
		
	</div>
		<?php 
			if($_SESSION['state'] == 1){
				include ("../templates/footer.php");
			}
			else{
				include ("templates/footer.php");
			} 
		?>
</html>