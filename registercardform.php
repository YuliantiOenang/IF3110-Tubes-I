<!DOCTYPE HTML>
<html>
<head><title>Pendaftaran Kartu Kredit</title></head>
<body>
	<?php include "header.php"; ?>
	<?php include "sidebar.php";?>
	<form id="registerform" method="post" action="registercard.php">
	<strong><h2>Pendaftaran Kartu Kredit</h2></strong><br>
	<p><?php echo $owner; ?> Bisa mendaftarkan kartu kredit sekarang atau nanti</p>
	<pre>Card Number	<input type="text" name="cardnumber"></pre>
	<pre>Name on Card	<input type="text" name="nama"></pre>
	<pre>Expired Date 	<input type="text" name="expired"></pre>
	<input type="hidden" name="username" value="<?php echo $owner; ?>">
	<input type="submit" value="Ok"> <a href="index.php">Skip</a></form>
	<script>
	if(typeof(Storage)!=="undefined"){
		if(!localStorage.wbduser){
			var s = "<strong>Maaf, halaman ini tidak bisa diakses jika kamu belum login.</strong><br>";
			s += "<p>Halaman akan segera dialihkan ke halaman registrasi...</p>";
			document.getElementById("registerform").innerHTML = s;
			setTimeout("window.location='registerform.php'",3000);
		}
	}else{
		document.getElementById("menubar").innerHTML="Maaf, browser kamu tidak support Web Storage sehingga informasi username tidak dapat disimpan...";
	}
	</script>
	<?php include "footer.php"; ?>
</body>