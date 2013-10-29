<?php 
/*
	session_start();
	session_destroy();
*/

	$con=mysqli_connect("localhost","root", "", $CONFIG['mysql']['database'] );
	if(mysqli_connect_errno()){
			echo "Gagal Buka DB" . msqli_connect_error();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo SITEURL . '/include/css/style.css'?>">	
		<link rel="stylesheet" type="text/css" href="<?php echo SITEURL . '/include/css/test.css' ?>">	
	</head>
		
	<body> 
	
	<?php require SITEPATH . '/app/views/header.php'?>
		
		<!--content-->
		<div class="populer">
				<center>
					<div id="popularFont">
						<p>BARANG TERPOPULER</p>
					</div>
				<ul>
					<li>															
						<?php
							$result = mysqli_query($con,"SELECT * FROM product where (sold = (SELECT Max(sold) from product where category='Elektronik')) AND category='Elektronik'");					
							while($row = mysqli_fetch_array($result))
							{	
								echo '<a href=product/detail/' . $row['product_id'] . '>';
								echo '<img src=' . SITEURL . '/include/' . $row['image_link'] . '>';
								echo '</a>';
							}						
						?>										
					</li>						
					
					<li>
						<?php
							$result = mysqli_query($con,"SELECT * FROM product where (sold = (SELECT Max(sold) from product where category='Sandang')) AND category='Sandang'");							
							while($row = mysqli_fetch_array($result))
							{	
								echo '<a href=product/detail/' . $row['product_id'] . '>';
								echo '<img src=' . SITEURL . '/include/' . $row['image_link'] . '>';
								echo '</a>';
							}						
						?>				
					</li>
					
					<li> 				
						<?php
							$result = mysqli_query($con,"SELECT * FROM product where (sold = (SELECT Max(sold) from product where category='Otomotif')) AND category='Otomotif'");							
							while($row = mysqli_fetch_array($result))
							{	
								echo '<a href=product/detail/' . $row['product_id'] . '>';
								echo '<img src=' . SITEURL . '/include/' . $row['image_link'] . '>';
								echo '</a>';
							}						
						?>				
					</li>
				</ul>
			</center>
		</div>
		<!--end content-->		
	</body>	
	<!--
	<footer>
		<div id="footer">
			INI FOOTER
		</div>		
	</footer>-->
</html>
