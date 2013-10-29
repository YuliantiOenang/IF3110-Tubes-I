<!-- SESSION -->
<?php
	session_start();
	//session_destroy();
?>

<html>
	<!-- NECESSARY INCLUDE -->
	<head>
		<link rel="stylesheet" type="text/css" href="css/general.css"></link>
		<meta charset="UTF-8"></meta>
		<script src="js/login.js"></script>
	</head>

	<!-- HEADER -->
	<?
		if (isset($_SESSION['usr'])) { // check if any user is logged in
			?>
				<body onload="load_header()">
			<?
		} else { // no user logs in
			?>
				<body>
			<?
		}
	?>
		<div id="header">
			<div id="header_top">
				<ul id="nav_bar_right">
					<li id="nav_hor">
						<a href="shoppingbag.php">
							<img src="img/cart.png"></img>
						</a>
					</li>
					<li id="nav_hor">|</li>
					<li id="nav_hor">
						<a href="login.php" onclick="return login()">
							<b>MASUK</b>
						</a>
					</li>
					<li id="nav_hor">|</li>
					<li id="nav_hor">
						<a href="register.php">
							<b>DAFTAR</b>
						</a>
					</li>
					<li id="nav_hor_hidden">|</li>
					<li id="nav_hor_hidden"><b>Selamat datang,</b></li>
					<li id="nav_hor_hidden">
						<a href="profile.php">
							<b id="username">
								<?
									echo $_SESSION['usr'] . '!';
								?>
							</b>
						</a>
					</li>
					<li id="nav_hor_hidden">|</li>
					<li id="nav_hor_hidden">
						<a href="logout.php">
							<b>KELUAR</b>
						</a>
					</li>
				</ul>
			</div>
			<div id="header_bottom">
				<ul id="nav_bar">
					<li id="nav_hor_wrap"></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Makanan">MAKANAN</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Pakaian">PAKAIAN</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Furnitur">FURNITUR</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Peralatan Dapur">ALAT DAPUR</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Alat Sehari - hari">LAIN-LAIN</a></li>
					<li id="search">
						<form action="search.php" method="post">
							<input id="text_field" type="text" name="name"></input>
							<input id="button" type="submit" value="CARI"></input>
						</form>
					</li>
				</ul>
			</div>
			<a id="logo" href="index.php">
				<img src="img/logo.png"></img>
			</a>
			<div id="title">
				<h1>
					RuSerBa LapAn
				</h1>
				<p id="subtitle">
					Ruko Serba Ada Lapak Andalan
				</p>
			</div>
		</div>
	</body>
</html>