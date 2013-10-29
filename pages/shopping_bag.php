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
				//$row = array();
				echo"<h1>Shopping Bag</h1>";
				$counts = 0; $i = 0;
				if(isset($_SESSION["shopping_bag"])){
					$result = $_SESSION["shopping_bag"];
					foreach ($result as $value) {
						//echo "<div class="">";
						$row[$i] = $value;
						$i++;
						$counts = $counts + $_SESSION[$value];
						echo "<p tabindex = '1'>".$i.". ".$value." (".$_SESSION[$value]." units)"."<br/></p>";
						
						echo "<input type='number' value='".$_SESSION[$value]."' onkeyup='addToCart2(".$row[$i-1].",".$_SESSION[$value].")'/>";
						
					}
				} else{
					echo "No item in the cart";
				}
				
				if($counts > 0){
					echo "<button onkeyup='addToCart2(1,1)'>Beli</button>";
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