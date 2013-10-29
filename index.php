<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='css/homepage.css' media='screen' />

<head>
	<title>Toko Imba</title>	

</head>
	<div class="opening">
		<div class="content">
			<img src="img/logo.png" width='336px' height='149px'>
		</div>
	</div>
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
			<?php
				//buat kategori 1
				// Create connection
				$con=mysqli_connect("127.0.0.1","root","","toko_imba");

				// Check connection
				if (mysqli_connect_errno($con)){
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				//check data posted
				for($i=1;$i<=5;$i++){
					//$result = mysqli_query($con,"SELECT * FROM transaksi NATURAL JOIN inventori NATURAL JOIN kategori WHERE id_kategori = '".$i."'");
					
				}
			?>
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