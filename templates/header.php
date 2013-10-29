<?php
	if($_SESSION['state'] == 2){
		echo "<script type='text/javascript' src='js/general.js'></script>";
	} else
		echo "<script type='text/javascript' src='../js/general.js'></script>";
?>

<?php
	if($_SESSION['state']== 1) {
		include ("../templates/mask.php");
	} else {
		include ("templates/mask.php");
	}	
?>

<div class = "heading">
	<div class = "logo">
		<?php 
			if($_SESSION['state'] == 2)
				echo "<a href='index.php'><img src='img/logo.png' width=200px/></a>";
			else
				echo "<a href='../index.php'><img src='../img/logo.png' width=200px/></a>";
		?>
	</div>
	<div class = "registerlogin">
		<!--check if its logged-->
		<?php
			$data = null;
			$active = false;
			if(isset($_SESSION['on'])){
				if(isset($_SESSION['username'])){
					if($_SESSION['on']){
						$data = $_SESSION['username'];
						
						if($_SESSION['state'] == 1){
							echo "<a href='../pages/shopping_bag.php'><img width=100px src='../img/viewcart.png'/></a><br/>";
						} else{
							echo "<a href='pages/shopping_bag.php'><img width=100px src='img/viewcart.png'/></a><br/>";
						}
						
						echo "You are logged as ".$data;

						if($_SESSION['state'] == 1){
							echo "<br/><a href='../controllers/logout.php'>log out</a>";
						}
						else{
							echo "<br/><a href='controllers/logout.php'>log out</a>";
						} 
						$active = true;
					}
				}
			} 
			
			if(!$active){
				if($_SESSION['state'] == 2){
					echo "<a href='pages/register_user.php'>register</a> or ";?>
					<a href=# onclick="doPopUp()">login</a>
				<?php
				} else
					echo "<a href='../pages/register_user.php'>register</a> or <a href=# onclick='doPopUp()'>login</a>";
			} else{
				if($_SESSION['state'] == 2){
					echo "<br/><a href='pages/register_credit_card.php'>view/registrasi kartu kredit</a>";
				} else{
					echo "<br/><a href='../pages/register_credit_card.php'>view/registrasi kartu kredit</a>";
				}
			}
		?>
	
	<?php 
	if(isset($_SESSION['on'])){
	if($_SESSION['on']){
	?>
	
		<?php
			echo "<br/>";
			if($_SESSION['state'] == 1){
				//echo "<img width=100px src='../img/viewcart.png'/><br/>";
				echo "<a href='../pages/profile_user.php'>view/edit profile</a>";
			}
			else{
				//echo "<img width=100px src='img/viewcart.png'/><br/>";
				echo "<a href='pages/profile_user.php'>view/edit profile</a>";
			} ?>
	<?php }} ?>
	</div>
</div>