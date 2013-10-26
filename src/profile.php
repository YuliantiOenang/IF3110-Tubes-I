<html>
<head>
<title>Profile Pengguna</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="js/validasiregistrasi.js"></script>
<?php
	include "config.php";
	session_start();
	$result1 = mysql_query("SELECT * FROM pengguna WHERE username='ditra77'");
	$result2 = mysql_query("SELECT COUNT(*) FROM shopping_bag WHERE username='ditra77'");
	$row1 = mysql_fetch_array($result1);
?>
</head>

<body>
	<div id="container">
		<div id="profilearea"> 
			<h3>PROFIL PENGGUNA <?php echo strtoupper($row1['username']); ?></h3>
			<div class="tampil_data">
				Nama Lengkap :
			</div>
			<div class="tampil_data">
				<?php echo $row1['fullname']; ?>
			</div>
			<div class="tampil_data">
				Email :
			</div>
			<div class="tampil_data">
				<?php echo $row1['email']; ?>
			</div>
			<div class="tampil_data">
				Alamat :
			</div>
			<div class="tampil_data">
				<?php echo $row1['alamat']; ?>
			</div>
			<div class="tampil_data">
				Kota/Kabupaten :
			</div>
			<div class="tampil_data">
				<?php echo $row1['kota_kab']; ?>
			</div>
			<div class="tampil_data">
				Provinsi :
			</div>
			<div class="tampil_data">
				<?php echo $row1['provinsi']; ?>
			</div>
			<div class="tampil_data">
				Kode Pos :
			</div>
			<div class="tampil_data">
				<?php echo $row1['kode_pos']; ?>
			</div>
			<div class="tampil_data">
				Nomor Hp :
			</div>
			<div class="tampil_data">
				<?php echo $row1['no_hp']; ?>
			</div>
		</div>
	</div>
</body>
</html>
