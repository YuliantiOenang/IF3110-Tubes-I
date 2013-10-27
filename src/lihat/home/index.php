<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Home </title>
    <link href="../css/loginPopup.css" rel="stylesheet"/>
    <script src="../js/ajaxLogin.js" type="text/javascript"></script>
</head>
<body>
Untuk member silahkan <a href="#login_popup"> Masuk </a><br>
Untuk Admin silahkan <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/admin/login"> Admin Login </a><br>
Bagi yang ingin join silahkan <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user/register"> Daftar </a><br>
Untuk lihat-lihat barang, silahkan klik <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/home/gallery"> ini </a><br>
Untuk masuk laman akun anda, silahkan klik <a href="<?=SITE_ROOT.NAME_ROOT;?>/index.php/user">ini </a><br>

<div id="login_popup">
    <div id="popup">
    <?=$data['loginView'];?>
</form>
</div>

</body>
</html>
