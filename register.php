<?php

include 'db.php';
include 'macro/header.php';

?>

<!DOCTYPE html>
<html>
<head>
<script src="validate.js"></script>
<title>Title</title>
</head>

<body>
	<?php
	if (!isset($_SESSION['user_id'])) {
	?>
		<form method="post" action="reg.php" name="regform">
			<input id="username" name="username" placeholder="username" type="text" onkeypress="if(this.value != '') validateUsername('username', this.value, 'valusername');" /><div id="valusername"></div><br />
			<input id="password" name="password" placeholder="password" type="password" onkeypress="if(this.value != '') validatePassword(this.value, password2.value, username.value, email.value, 'valpasswords');" /><div id="valpassword"></div><br />
			<input id="password2" name="password2" placeholder="password lagi" type="password" onkeypress="if(this.value != '') validatePassword(password.value, this.value, username.value, email.value, 'valpasswords');" /><div id="valpasswords"></div><br />
			<input id="name" name="name" placeholder="nama lengkap" type="text" onkeypress="if(this.value != '') validateName(this.value, 'fullname');"/><div id="fullname"></div><br />
			<input id="email" name="email" placeholder="email" type="email" onkeypress="if(this.value != '') validateEmail('email', this.value, 'valemail');"/><div id="valemail"></div><br />
			
			<input id="telephone" name="telephone" placeholder="telepon" type="tel" onkeypress="validateEmpty(this.value, 'valtelephone')" /><div id="valtelephone"></div><br />
			<textarea id="address" name="address" onkeypress="validateEmpty(this.value, 'valaddress')"></textarea><div id="valaddress"></div><br />
			<input id="city" name="city" placeholder="kota" type="text" onkeypress="validateEmpty(this.value, 'valcity')"/><div id="valcity"></div><br />
			<input id="province" name="province" placeholder="provinsi" type="text" onkeypress="validateEmpty(this.value, 'valprovince')"/><div id="valprovince"></div><br />
			<input id="postal" name="postal" placeholder="kode pos" type="number" onkeypress="validateEmpty(this.value, 'valpostal')"/><div id="valpostal"></div><br />
			
			<input type="submit" /><br />
		</form>
	<?php
	} else {
		echo "<meta http-equiv='refresh' content='=0;index.php' />";
	}
	?>
</body>

</html> 