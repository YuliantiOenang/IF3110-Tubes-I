<div class = "heading">
	<div class = "logo">
		<img src="img/logo.png" width=200px></img>
	</div>
	<div class = "login">
		<!--check if its logged-->
		<?php
			session_start();
			$data = null;
			if(isset($_SESSION['session'])){
				if(isset($_SESSION['username'])){
					$data = $_SESSION['username'];
					echo "You are logged as ".$data;
				}
			} else{
				echo "<a href='pages/register_user.php'>register</a> or <a href='pages/login_user.php'>login</a>";
			}
		?>
	</div>
	<div class = "user">
		<br/>
		<a href="pages/profile_user.php">view/edit profile</a>
	</div>
</div>