<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Ini laman ganti indentitas </title>
    <link href="../../css/profile.css" rel="stylesheet"/>
    <script src="../../js/ajaxValidation.js" type="text/javascript"></script>
</head>
<body>
<form id="changeForm" action="#" method="POST" onsubmit="onChange('../user/change'); return false;">
    <input type="hidden" name="email" id="email" value="<?=$_SESSION['email'];?>">
    <input type="hidden" name="username" id="username" value="<?=$_SESSION['username'];?>">
	Nama Lengkap* : <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?=$_SESSION['nama_lengkap'];?>" onkeyup="ajaxValidation('checkNamaLengkap', this.value, this.id);"><br>
    <div id="nama_lengkap_response" class="error_message"> </div> 
	New Password* : <input type="password" name="password" id="password" value="<?=$_SESSION['password'];?>" onkeyup="ajaxValidation('checkPassword', this.value, this.id);"><br>
    <div id="password_response" class="error_message"> </div>
	Confirm Password* : <input type="password" name="confirm" value="" id="confirm" onkeyup="ajaxValidation('checkConfirm', this.value, this.id);"><br>
    <div id="confirm_response" class="error_message"> </div>
	HP : <input type="text" name="HP" id="HP" value="<?=$_SESSION['HP'];?>"><br>
	Alamat : <textarea name="alamat" id="alamat"><?=$_SESSION['alamat'];?></textarea><br>
	Provinsi : <input type="text" name="provinsi" id="provinsi" value="<?=$_SESSION['provinsi'];?>"><br>
	Kota / Kabupaten : <input type="text" name="kota" id="kota" value="<?=$_SESSION['kota'];?>"><br>
	KodePos : <input type="text" name="kodepos" id="kodepos" value="<?=$_SESSION['kodepos'];?>"><br>
	<input type="submit" value="submit" name="submit">
    <input type="button" value="back" onClick="history.go(-1);return reset();"><br>
    * = Wajib diisi
</form>
</body>
</html>
