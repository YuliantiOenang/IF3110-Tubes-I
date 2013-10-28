<div class = "heading">
	<div class = "logo">
		<img src="img/logo.png" width=200px></img>
	</div>
	<div class = "login">
		<!--check if its logged-->
		<?php
			session_start();
			$data = null;
			$active = false;
			if(isset($_SESSION['on'])){
				if(isset($_SESSION['username'])){
					if($_SESSION['on']){
						$data = $_SESSION['username'];
						echo "You are logged as ".$data;
						echo "<br/><a href='controllers/logout.php'>log out</a>";
						$_SESSION['state'] = 1;
						$active = true;
					}
				}
			}
			
			if(!$active){
				echo "<a href='pages/register_user.php'>register</a> or <a href='pages/login_user.php'>login</a>";
			}
		?>
	</div>
	<div class = "user">
		<br/>
		<a href="pages/profile_user.php">view/edit profile</a>
	</div>
</div>