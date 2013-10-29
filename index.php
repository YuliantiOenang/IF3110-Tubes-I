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
		
		<form action="search.php" method="get">
					<div class='sbox'>
						<h3 class='sb_name'>Pencarian</h3>
						<div class='sb_name'>Nama:</div><div class='sb_value'><input type="text" name="query_name" size="30" onkeyup="showResult(this.value)"></div>
						<div id="livesearch"></div>
						<div class='sb_name'>Harga:</div><div class='sb_value'><input type="text" name="query_price" size="30"></div>
						<div class='sb_name'>Kategori:</div><div class='sb_value'><select name="query_category">
						  <option value="baking">Baking</option>
						  <option value="beverages">Beverages</option>
						  <option value="cansoups">Canned Goods & Soups</option>
						  <option value="household">Household Essentials</option>
						</select></div>
						<input type="submit" value="Submit">
					</div>
				</form>
			<!--<p>Toko Imba</p>-->
		</div>
		
		<?php 
			if($_SESSION['state'] == 1){
				include ("../templates/footer.php");
			}
			else{
				include ("templates/footer.php");
			} 
		?>
	</div>
	<?php
		include ("templates/mask.php");
	?>
</html>