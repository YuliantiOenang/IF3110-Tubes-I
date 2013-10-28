<?php

include "db.php"

?>

<head>
	<title>KasKong</title>

	<link rel="stylesheet" type="text/css" href="css/header.css">
	<script src="script/header_home.js"></script>
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
		<a id="shopbag" href="#"><img src="images/shopbag.png"></a></p>
		<div id="headerControl">
			<?php
				if (isset($_SESSION['user_id'])) {
					echo "Welcome ".$_SESSION['username']."!";
					echo "<button type=\"button\" onclick=\"location.href='logout.php';\">Logout</button><br />";
				} else {
					echo "<button type=\"button\" onclick=\"toggleLogin()\">Login</button>";
					echo "<button type=\"button\" onclick=\"location.href='register.php';\">Register</button>";
				}
			?>
		</div>
	</div>
	<div id="loginPop">
  	<form id='loginForm' method="post" autocomplete="off">
    	<table>
    		<tr>
    			<td>Username:</td>
    			<td><input style="width: 125px;" type="text" name="user" /></td>
            </tr>
            <tr>
    			<td>Password:</td>
    			<td><input style="width: 125px;" type="password" name="pass" /></td>
    		</tr>
    		<tr>
    			<td colspan="2" align="right" valign="bottom"><input type="submit" id="subLog" value="Log me in!"/></td>
    		</tr>
    	</table>
    </form>
	</div>
  <div id="searchPop">
  <form id='searchForm' method="post" autocomplete="off">
      <table>
        <tr>
          <td><input style="width: 100px;" type="text" name="itemName" placeholder="Nama Item"/></td>
          <td>
          <select name="kategori" form='searchForm'>
            <option value="0">Pilih Kategori</option>
            <option value="1">Makanan</option>
            <option value="2">Minuman</option>
            <option value="3">Pakaian</option>
            <option value="4">Rumah</option>
            <option value="5">Plus-Plus</option>
          </select>
        </tr>
        <tr>
          <input placeholder="Harga Min" style="width: 100px;" type="number" name="rangeMin" step="10000" min=0 max=2000000000> to 
          <input placeholder="Harga Max" style="width: 100px;" type="number" name="rangeMax" step="10000" min=0 max=2000000000>
          <input type="submit">
        </tr>
      </table>
    </form>
  </div>
	<h3>Barang? Boleh sama... Kualitas? Dijamin <i>Oeh</i> punya!</h3>
</div>
?>