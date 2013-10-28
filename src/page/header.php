<?php 
	require('database\getprofil.php');

	if(!isset($_SESSION)){
		session_start();
	}
	if(isset($_SESSION['login_user'])) {
		$user_check = $_SESSION['login_user'];
	} else {
		$user_check = "";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Header</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="modal.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="header.js"></script>
	</head>
	<body onLoad="initialize()">
		
		<div id="header-left-side"><a href="index.php"><img src="../image/logo.png" width="222px" height="60px"/></a>
			<div id="header-bottom-side">
				<div id="space"><a href="index.php">Makanan</a></div>
				<div id="space"><a href="index.php">Minuman</a></div>
				<div id="space"><a href="index.php">Perawatan Anak-Anak</a></div>
				<div id="space"><a href="index.php">Perawatan Pribadi</a></div>
				<div id="space"><a href="index.php">Perlengkapan Rumah</a></div>
			</div>
		</div>
		
		<div id="header-right-side">
			<div id="header-right-search">
				<form action="search_result.php" method="post">
					<input type="text" name="search_text" id="search_text" list="searching-auto" value=""" />
					<input type="submit" value="Search"/>
					<div id="list-search"></div> 
					</div>
				</form>
            
			<?php if(isset($_SESSION['login_user'])) { ?>
				<div id="logout">
					<input type="button" value="LOGOUT" onclick="window.location.href='database/logout.php'; return false;" />
				</div>
								
				<div id="login">
					Welcome, <a href="profile.php"><?php echo $profil_name; ?></a>
				</div>			

			<?php } else { ?>
				<div id="login">
					<div id="add-category"><a href="#login_button"><button>LOGIN</button></a>&nbsp;
					
					</div>				
					<!-- popup form #1 -->
							<a href="#x" class="overlay" id="login_button"></a>
							<div class="popup">
								<h2>Login</h2>
								<br>
								<form action="database\checklogin.php" method="post">
								<div>
									<label for="login">Username :</label>
									<input type="text" id="loginusername" value="" name="username"/>
								</div>
								<div>
									<label for="asignee">Password : </label>
									<input type="password" id="loginPassword" value="" name="password"/>
								</div>
								<div>
									<input type="submit" value="Login"/>
									<a href="register.php">Register</a>
								</div>
								</form>

								<a class="close" href="#close"></a>
							</div>
					
				</div>
			<?php } ?>

			</div>
		</div>
	</body>
</html>