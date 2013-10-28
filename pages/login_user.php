<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<script type="text/javascript" src="../js/register_user.js"></script>
<script type="text/javascript" src="../js/general.js"></script>

<head>
	<title>Login User</title>	

</head>
<body>
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
			<form action = "../controllers/login_user.php" method = "post">
				<p>username</p>
				<input id="username" name="username">
				</input>
				<p>password</p>
				<input id="password" name="password">
				</input>
				<br/><br/>
				<button type="submit">Login</button>
			</form>
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
</body>
</html>