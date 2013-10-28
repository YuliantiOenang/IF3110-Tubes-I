<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Ini laman registrasi </title>
    <link href="../../css/profile.css" rel="stylesheet"/>
    <link href="../../css/mainstyle.css" rel="stylesheet"/>
    <script src="../../js/ajaxValidation.js" type="text/javascript"></script>
</head>
<body>
	<div id="header">
		<div id="toplogo">
			<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home"><img id="logo" src="../../gambar_barang/logoruserba.jpg" alt="home"></a>
		</div>
		<div id="logintop">
			<a href="#login_popup"><strong>Login</strong></a>
			<br><br>
			<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/register"><strong>Register</strong></a>
			<p id ="search">Cari Barang: <input type="text" size="100"> <input type="submit" value="Search"></p>
			<a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/cart"><img id="tasbelanja" src="../../gambar_barang/tasbelanja.jpg" alt="Tas Belanja"></a>	
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
<!--	<div id="registercontent">
		<h3 id="formtitle">FORM REGISTRASI</h3>
		<br><br>
		<form id="registerForm" action="#" autocomplete="off" method="POST" onsubmit="onRegister('../user/register', 'registerForm'); return false;">
			<p>Username:</p>
			<input type="text" name="username" id="username" onkeyup="ajaxValidation('checkUsername', this.value, this.id);">
			<p>Password:</p>
			<input type="password" name="password" id="password" onkeyup="ajaxValidation('checkPassword', this.value, this.id);">
			<p>Confirm Password:</p>
			<input type="password" name="confirm" id="confirm" onkeyup="ajaxValidation('checkConfirm', this.value, this.id);">
			<p>Nama Lengkap:</p>
			<input type="text" name="nama_lengkap" id="nama_lengkap" onkeyup="ajaxValidation('checkNamaLengkap', this.value, this.id);">
			<p>Nomor Handphone:</p>
			<input type="text" name="HP" id="HP">
			<p>Alamat:</p>
			<textarea name="alamat" id="alamat"></textarea>
			<p>Provinsi:</p>
			<input type="text" name="provinsi" id="provinsi">
			<p>Kota/Kabupaten:</p>
			<input type="text" name="kota" id="kota">
			<p>Kode Pos:</p>
			<input type="text" name="kodepos" id="kodepos">
			<p>Email:</p>
			<input type="text" name="email" id="email" onkeyup="ajaxValidation('checkEmail', this.value, this.id);">
			<br><br>
			<input type="submit" value="Submit">
			<p>* = wajib diisi</p>
		</form>

	</div> -->
	<div id="registercontent">
<form id="registerForm" action="#" autocomplete="off" method="POST" onsubmit="onRegister('../user/register', 'registerForm'); return false;">
    Email* : <input type="text" name="email" id="email" onkeyup="ajaxValidation('checkEmail', this.value, this.id);"><br>
    <div id="email_response" class="error_message"> </div>
    Username* : <input type="text" name="username" id="username" onkeyup="ajaxValidation('checkUsername', this.value, this.id);"><br>
    <div id="username_response" class="error_message"> </div>
    Password* : <input type="password" name="password" id="password" onkeyup="ajaxValidation('checkPassword', this.value, this.id);"><br>
    <div id="password_response" class="error_message"> </div>
    Confirm Password* : <input type="password" name="confirm" id="confirm" onkeyup="ajaxValidation('checkConfirm', this.value, this.id);"><br>
    <div id="confirm_response" class="error_message"> </div>
    Nama Lengkap* : <input type="text" name="nama_lengkap" id="nama_lengkap" onkeyup="ajaxValidation('checkNamaLengkap', this.value, this.id);"><br>
    <div id="nama_lengkap_response" class="error_message"> </div>    
    HP : <input type="text" name="HP" id="HP"><br>
    Alamat : <textarea name="alamat" id="alamat"></textarea><br>
    Provinsi : <input type="text" name="provinsi" id="provinsi"><br>
    Kota / Kabupaten : <input type="text" name="kota" id="kota"><br>
    KodePos : <input type="text" name="kodepos" id="kodepos"><br>
    <input type="submit" value="submit" name="submit" id="submit" disabled="true"><br>
    * = Wajib diisi
	</div>
</form>
</body>
</html>
