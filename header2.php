<h2>Selamat datang di Ruserba</h2><hr>
<div id="header">
	<?php
	include "koneksi.inc.php";
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($_GET['logout']){
		echo "<script>localStorage.clear();</script>";
	}
	if(empty($username) and empty($password)){
	?>
		<form method="post" action="index.php">
		<p>Username <input type="text" name="username">
		 Password <input type="password" name="password">
		 <input type="submit" value="Login"> <a href="registerform.php">Daftar baru!</a>
		</p></form>
	<?php
	}else{
		$hasil = mysql_query("SELECT * FROM anggota where username='".$username."' and password='".$password."'",$koneksi);
		if(mysql_num_rows($hasil)==1){
			$row = mysql_fetch_array($hasil);
			echo "<script>localStorage.wbduser=\"".$username."\";</script>";
			echo "<p>Selamat datang, <b>".$row['nama']."</b> ^^</p>";
			echo '<form method="post" action="index.php?logout=true"><input type="submit" value="Logout"></form>';
		}else{
	?>
			<form method="post" action="index.php">
			<p>Username atau password anda salah! silahkan login ulang. | 
			 Username <input type="text" name="username">
			 Password <input type="password" name="password">
			 <input type="submit" value="Login"> <a href="registerform.php">Daftar baru!</a>
			</p></form>
	<?php
		}
	}
	?>
</div><hr>
<div id="searchbar"><input type="text" name="search"> <input type="submit" value="Search"> <a href="shoppingbag.php">Shopping Bag</a></div>