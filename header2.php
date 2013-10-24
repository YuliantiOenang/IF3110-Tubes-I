<h2>Selamat datang di Ruserba</h2><hr>
<div id="header"></div><hr>
<div id="searchbar"><input type="text" name="search"> <input type="submit" value="Search"> <a href="shoppingbag.php">Shopping Bag</a></div>
<script>
if(typeof(Storage)!=="undefined"){
	if(localStorage.wbduser){
		var s = "<p>Selamat datang, <b>"+localStorage.wbduser+"</b>! ^^</p>";
		s += "<form method=\"post\" action=\"index2.php\"><input type=\"submit\" value=\"Logout\" onclick=\"javascript:localStorage.removeItem('wbduser');\"></form>";
		document.getElementById("header").innerHTML=s;
	}else{
		<?php
		include "koneksi.inc.php";
		$username=$_POST['username'];
		$password=$_POST['password'];
		if(empty($username) and empty($password)){
		?>
		var s = '<form method="post" action="index2.php">';
		s += '<p>Username <input type="text" name="username">';
		s += 'Password <input type="password" name="password">';
		s += '<input type="submit" value="Login"> <a href="registerform.php">Daftar baru!</a></p></form>';
		document.getElementById("header").innerHTML=s;
		<?php
		}else{
			$hasil = mysql_query("SELECT * FROM anggota where username='".$username."' and password='".$password."'",$koneksi);
			if(mysql_num_rows($hasil)==1){
				$row = mysql_fetch_array($hasil);
				echo "localStorage.wbduser=\"".$username."\";";
				?>
				var s = "<p>Selamat datang, <b>"+localStorage.wbduser+"</b>! ^^</p>";
				s += "<form method=\"post\" action=\"index.php\"><input type=\"submit\" value=\"Logout\" onclick=\"javascript:localStorage.removeItem('wbduser');\"></form>";
				document.getElementById("header").innerHTML=s;
				<?php
			}else{
				?>
				var s = '<form method="post" action="index2.php">';
				s += '<p>Username atau password anda salah! Username <input type="text" name="username">';
				s += 'Password <input type="password" name="password">';
				s += '<input type="submit" value="Login"> <a href="registerform.php">Daftar baru!</a></p></form>';
				document.getElementById("header").innerHTML=s;
				<?php
			}
		}
		?>
	}
}else{
	document.getElementById("header").innerHTML="Sorry, your browser does not support web storage...";
}
</script>
