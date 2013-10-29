<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

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
				if(isset($_SESSION["shopping_bag"])){
					$result = $_SESSION["shopping_bag"];
					foreach ($result as $value) {
						//echo "<div class="">";
						echo $value;
						echo $_SESSION[$value]."<br/>";
						echo "</div>";
					}
				} else{
					echo "No item in the cart";
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