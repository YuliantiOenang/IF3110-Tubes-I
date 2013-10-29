<html>
<head>
<title>Home</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="js/fade.js"></script>
<script src="js/login.js"></script>

<?php
	session_start();
	if(isset($_SESSION['id']))
		header("location:index.php");
	include "config.php";
	$result1 = mysql_query("SELECT * FROM barang WHERE kategori='beras' ORDER BY terjual DESC");
	$row11 = mysql_fetch_array($result1);
	$row12 = mysql_fetch_array($result1);
	$row13 = mysql_fetch_array($result1);
	$array1 = '"'.$row11['url_gambar'].';'.$row12['url_gambar'].';'.$row13['url_gambar'].'"';
	$result2 = mysql_query("SELECT * FROM barang WHERE kategori='gula' ORDER BY terjual DESC");
	$row21 = mysql_fetch_array($result2);
	$row22 = mysql_fetch_array($result2);
	$row23 = mysql_fetch_array($result2);
	$array2 = '"'.$row21['url_gambar'].';'.$row22['url_gambar'].';'.$row23['url_gambar'].'"';
	$result3 = mysql_query("SELECT * FROM barang WHERE kategori='daging' ORDER BY terjual DESC");
	$row31 = mysql_fetch_array($result3);
	$row32 = mysql_fetch_array($result3);
	$row33 = mysql_fetch_array($result3);
	$array3 = '"'.$row31['url_gambar'].';'.$row32['url_gambar'].';'.$row33['url_gambar'].'"';
	$result4 = mysql_query("SELECT * FROM barang WHERE kategori='sayur' ORDER BY terjual DESC");
	$row41 = mysql_fetch_array($result4);
	$row42 = mysql_fetch_array($result4);
	$row43 = mysql_fetch_array($result4);
	$array4 = '"'.$row41['url_gambar'].';'.$row42['url_gambar'].';'.$row43['url_gambar'].'"';
	$result5 = mysql_query("SELECT * FROM barang WHERE kategori='bumbu' ORDER BY terjual DESC");
	$row51 = mysql_fetch_array($result5);
	$row52 = mysql_fetch_array($result5);
	$row53 = mysql_fetch_array($result5);
	$array5 = '"'.$row51['url_gambar'].';'.$row52['url_gambar'].';'.$row53['url_gambar'].'"';
?>
</head>  
<body>
	<div id="container">
		<div id="header"> 
			<div id="logo">
				<a href="index.php"><img src="images/logo.png" title="Home" alt="Home"/></a>
			</div>
			<div id="button_login">
				<a href="#login_form"><button type="button" value="Login">Login</button></a>
			</div>
			<div id="button_daftar">
				<input type=button value="Daftar" onClick="window.location.href='registrasiidentitas.php'">
			</div>
		</div>
		<div id="mekanisme_transaksi"> 
			<img src="images/mekanisme.jpg">
		</div>
		<div id="barang_populer">
			<h2>Barang-Barang Populer</h2>
			<div class="kategori">
				<h3>Daging</h3>
				<div id="gambar3" >
					<?php echo '<img id="slideshow3" src="'.$row11['url_gambar'].'">'; ?>
				</div>
			</div>
			<div class="kategori">
				<h3>Sayur</h3>
				<div id="gambar4" >
					<?php echo '<img id="slideshow4" src="'.$row21['url_gambar'].'">'; ?>
				</div>
			</div>
			<div class="kategori">
				<h3>Bumbu</h3>
				<div id="gambar5" >
					<?php echo '<img id="slideshow5" src="'.$row21['url_gambar'].'">'; ?>
				</div>
			</div>
			<div class="kategori">
				<h3>Beras</h3>
				<div id="gambar1" >
					<?php echo '<img id="slideshow1" src="'.$row11['url_gambar'].'">'; ?>
				</div>
			</div>
			<div class="kategori">
				<h3>Gula</h3>
				<div id="gambar2" >
					<?php echo '<img id="slideshow2" src="'.$row21['url_gambar'].'">'; ?>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">  
		RunSlideShow("slideshow1","gambar1",<?php echo $array1; ?>,5); 
		RunSlideShow("slideshow2","gambar2",<?php echo $array2; ?>,5); 
		RunSlideShow("slideshow3","gambar3",<?php echo $array3; ?>,5); 
		RunSlideShow("slideshow4","gambar4",<?php echo $array4; ?>,5); 
		RunSlideShow("slideshow5","gambar5",<?php echo $array5; ?>,5); 
	</script>
	
	<!--Popup edit profile -->
	<a href="#x" class="overlay" id="login_form"></a>
	<div class="popup">
		<form name="login" method="post" onSubmit="return checkLogin(document.login.username.value,document.login.password.value)" action="login.php" enctype="multipart/form-data">
			Username : <input name="username" type="text" maxlength="256">
			<div id="v_nama">
			</div>
			Password : <input name="password" type="password" maxlength="24">
			<input type="submit" name="submit" value="Login">
		<a class="close" href="#"></a>
		</form>
	</div>
</body>
</html>
