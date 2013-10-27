<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Ini laman registrasi </title>
    <link href="../../css/profile.css" rel="stylesheet"/>
    <script src="../../js/ajaxValidation.js" type="text/javascript"></script>
</head>
<body>
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
</form>
</body>
</html>
