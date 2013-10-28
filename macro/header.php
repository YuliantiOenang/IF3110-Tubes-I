<?php

include "db.php"

?>

<head>
	<title>KasKong</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<script src="script/header_home.js"></script>
	<script src="validate.js"></script>
</head>
<div id="headerMenu">
	<a href="">
		<img id='logo' src="images/logo.png">
	</a>
	<li><a href="page/asdf.php">Makanan</a></li>
	<li><a href="page/asdf.php">Minuman</a></li>
	<li><a href="page/asdf.php">Pakaian</a></li>
	<li><a href="page/asdf.php">Rumah</a></li>
	<li><a href="page/asdf.php">Plus-Plus</a></li>
	<div id='rightBox'>
		<?php
			if (isset($_SESSION['user_id'])) {
				echo "<a id=\"shopbag\" href=\"#\"><img src=\"images/shopbag.png\"></a></p>";
			}
		?>
		<div id="headerControl">
		<?php
			if (isset($_SESSION['user_id'])) {
				echo "Welcome <a href=\"profile.php?id=".$_SESSION['user_id']."\">".$_SESSION['username']."!</a>";
				echo "<button type=\"button\" onclick=\"location.href='logout.php';\">Logout</button><br />";
			} else {
				echo "<button type=\"button\" onclick=\"toggleLogin()\">Login</button>";
				echo "<button type=\"button\" onclick=\"location.href='register.php';\">Register</button>";
			}
		?>
		</div>
	</div>
	<div id="loginPop">
	<form id='loginForm' method="post" action="login.php" onsubmit="return (username.value != '' && password.value != '')" autocomplete="off">
	<table>
		<tr>
			<td>Username:</td>
			<td><input style="width: 125px;" type="text" name="username" id="username" /></td>
        </tr>  
        <tr>
			<td>Password:</td>
			<td><input style="width: 125px;" type="password" name="password" id="password" /></td>
		</tr>
		<tr>
			<td colspan="2" align="right" valign="bottom"><input type="submit" id="subLog" value="Log me in!"/></td>
		</tr>
	</table>
    </form>
	</div>
	<h3>Barang? Boleh sama... Kualitas? Dijamin <i>Oeh</i> punya!</h3>
</div>
?>