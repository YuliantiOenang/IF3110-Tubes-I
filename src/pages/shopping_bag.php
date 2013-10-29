<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />
<script type="text/javascript" src="../js/add_cart.js"></script>

<head>
	<title>Shopping Bag</title>	

</head>
	<div class = "page_container">
		<?php 
			session_start();
			
			$_SESSION['state'] = 1;
			
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
				$total_harga = 0;
				$harga = array();
				$row = array();
				echo"<h1>Shopping Bag</h1>";
				$counts = 0; $i = 0;
				if(isset($_SESSION["shopping_bag"])){
					$result = $_SESSION["shopping_bag"];
					foreach ($result as $value) {
						$row[$i] = $value;
						$i++;
						$counts = $counts + $_SESSION[$value];
						echo "<p tabindex = '1'>".$i.". ".$value." (".$_SESSION[$value]." units)"."<br/></p>";
						?>
						<input type='number' value="<?php echo $_SESSION[$value]; ?>"  onchange="addToCart(<?php echo $row[$i-1]; ?>,<?php echo $_SESSION[$value]; ?>)" />
						
						<!-- cari harga -->
						<?php
							
							// Create connection
							include ("../controllers/connect_database.php");
							
							//checking if username is not available
							$result = mysqli_query($con,"SELECT * FROM inventori WHERE nama_inventori = '".$value."'");
							
							$found = false;
							$data = null;
							if($result == null){
								
							} else{
								while($row = mysqli_fetch_array($result)){
									$data = $row;
									break;
								}
							}
							$harga[$value] = $data['harga'];
							echo "harga : ".($harga[$value] * $_SESSION[$value])."<br/>";
							$total_harga += $harga[$value] * $_SESSION[$value];
						?>
						
						<?php
						//cek permintaan khusus
						if(!isset($_SESSION[$value."desc"])){
							echo "tidak ada permintaan khusus";
						} else{
							echo "permintaan khusus : ".$_SESSION[$value."desc"]." ";
						}
						
					}
					echo "<br/><br/>Total biaya : ".$total_harga."<br/>";
				} else{
					echo "No item in the cart";
				}
				
				if($counts > 0){
					echo "<br/><button onmouseup='buy()'>Beli</button>";
				}
			?>
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
		if($_SESSION['state'] == 1){
			include ("../templates/mask.php");
		}
		else{
			include ("templates/mask.php");
		} 
	?>
</html>