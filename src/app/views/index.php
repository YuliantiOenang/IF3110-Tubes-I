<?php 
/*
	session_start();
	session_destroy();
*/

	$con=mysqli_connect("localhost","root","","tubessatu");
	if(mysqli_connect_errno()){
			echo "Gagal Buka DB" . msqli_connect_error();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo SITEURL . '/include/css/style.css'?>">		
	</head>
		
	<body> 
	
	<?php require SITEPATH . '/app/views/header-udin.php'?>
		
		<!--content-->
		<div class="populer">
				<center>
					<div id="popularFont">
						<p>BARANG TERPOPULER</p>
					</div>
				<ul>
					<li>															
						<?php
							$result = mysqli_query($con,"SELECT * FROM product where (sold = (SELECT Max(sold) from product where category=1)) AND category=1");					
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
							$result = mysqli_query($con,"SELECT * FROM product where (sold = (SELECT Max(sold) from product where category=2)) AND category=2");							
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
							$result = mysqli_query($con,"SELECT * FROM product where (sold = (SELECT Max(sold) from product where category=3)) AND category=3");							
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
