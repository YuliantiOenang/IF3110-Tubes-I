<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Ruserba - Home</title>
    <link href="../css/loginPopup.css" rel="stylesheet"/>
    <link href="../css/mainstyle.css" rel="stylesheet"/>
    <script src="../js/ajaxLogin.js" type="text/javascript"></script>
</head>
<body>

<!--
Untuk member silahkan <a href="#login_popup"> Masuk </a><br>
Untuk Admin silahkan <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/admin/login"> Admin Login </a><br>
Bagi yang ingin join silahkan <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/register"> Daftar </a><br>
Untuk lihat-lihat barang, silahkan klik <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery"> ini </a><br>
Untuk masuk laman akun anda, silahkan klik <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user">ini </a><br>
-->
	<div id="header">
		<div id="toplogo">
			<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home"><img id="logo" src="../gambar_barang/logoruserba.jpg" alt="home"></a>
		</div>
		<div id="logintop">
			<a href="#login_popup"><strong>Login</strong></a>
			<br><br>
			<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/register"><strong>Register</strong></a>
			<p id ="search">Cari Barang: <input type="text" size="100"> <input type="submit" value="Search"></p>
			<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/cart"><img id="tasbelanja" src="../gambar_barang/tasbelanja.jpg" alt="Tas Belanja"></a>	
		</div>
		<div id="kategori">
			 <p><span><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery">Sembako</a></span>
				<span class="underline">____</span>
				<span><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery">Handphone</a></span>
				<span class="underline">____</span>
				<span><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery">Peralatan Elektronik</a></span>
				<span class="underline">____</span>
				<span><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery">Aksesoris Komputer</a></span>
				<span class="underline">____</span>
				<span><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery">Perabotan Rumah</a></span>
				<span class="underline">____</span>
				<span><a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery">Alat Tulis</a></span>
			 <p>
		</div>
	</div>
	<div id="homecontent">
			<div id="pictext">
				<img id="pichome" class="picsize" src="beras.jpg" alt="Beras">
				<p>Beras</p>
				<p>Rp.25.000,-</p>
				<img id="pichome" class="picsize" src="beras.jpg" alt="Beras">
				<p>Beras</p>
				<p>Rp.25.000,-</p>
				<img id="pichome" class="picsize" src="beras.jpg" alt="Beras">
				<p>Beras</p>
				<p>Rp.25.000,-</p>
			</div>
	</div>

<div id="login_popup">
    <div id="popup">
    <?=$data['loginView'];?>
</form>
</div>

</body>
</html>
