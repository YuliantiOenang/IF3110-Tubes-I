<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
	<script type="text/javascript" src="json2.js"></script>
	<script type="text/javascript" src="xhr.js"></script>
	<script type="text/javascript" src="validate.js"></script>
</head>
<body <?php if ($section == "register") {echo 'onload="setFocus()"';} ?>>
	<div class="header">
		<div class="wrapper">
			<div class="top-header">
				<h1 class="branding-title"><a href="./">Shirts 4 Mike</a></h1>
				<div class="top-right">
				<?php if(isset($_SESSION['username'])) { ?>
					<p> Welcome, <a href="profil.php"><?php echo $_SESSION['username']; ?></a>
						<a href="logout.php"> Log out</a>
					</p>
				<?php } else { ?> 
					<a href="register.php"> Register </a>
					<a href="javascript:void(0)" onclick="login()"> Login </a> <br />
					<br />
					<input type="text" class="search">
				<?php } ?>
				</div>
			</div>
			<ul class="cat">
				<li class="menu">Kategori</li>
				<li class="menucat"><a href="products.php?category=snack">Snack</a></li>
				<li class="menucat"><a href="products.php?category=minuman">Minuman</a></li>
				<li class="menucat"><a href="products.php?category=makanan">Makanan</a></li>
				<li class="menucat"><a href="products.php?category=properti">Properti</a></li>
				<li class="menucat"><a href="products.php?category=buah">Buah</a></li>
			</ul>
		</div>
	</div>

	<div id="content">