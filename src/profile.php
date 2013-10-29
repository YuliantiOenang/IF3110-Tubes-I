<html>
<head>
<title>Profile Pengguna</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="js/validasiedit.js"></script>
<?php
	include "config.php";
	session_start();
	if(!isset($_SESSION['id']))
		header("location:index.php");
	$username = "'".$_SESSION['id']."'";
	$result1 = mysql_query("SELECT * FROM pengguna WHERE username=$username");
	$result2 = mysql_query("SELECT * FROM shopping_bag WHERE username=$username and status='SELESAI'");
	$row1 = mysql_fetch_array($result1);
	$row2 = mysql_num_rows($result2);
?>
</head>

<body>
	<div id="container">
		<?php include "header.php"?>
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
			<div class="tampil_data">
				Jumlah Transaksi :
			</div>
			<div class="tampil_data">
				<?php echo $row2; ?>
			</div>
		</div>
		<div id="kolom_tengah">
		</div>
		<div id="edit_profile">
			<form name="edit_form" method="post" onsubmit="return checkEdit(document.edit_form.nama_lengkap.value,
					document.edit_form.password.value,document.edit_form.confirm_password.value,
					document.edit_form.alamat.value, document.edit_form.kota_kab.value, document.edit_form.provinsi.value,
					document.edit_form.kode_pos.value,document.edit_form.no_hp.value)" action="editprofile.php" enctype="multipart/form-data">
				<h3>EDIT PROFIL PENGGUNA <?php echo strtoupper($row1['username']); ?></h3>
				<div class="form_field">
					<div class="field_kiri">
						Nama lengkap: 
					</div>
					<div class="field_kanan">
						<input type="text" name="nama_lengkap" maxlength="256" onKeyUp="validateFullName(document.edit_form.nama_lengkap.value)">
					</div>
					<div id="v_nama">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Password: 
					</div>
					<div class="field_kanan">
						<input name="password" type="password"  maxlength="24" onKeyUp="checkPass(document.edit_form.password.value, <?php echo "'".$row1['username']."'";?> , <?php echo "'".$row1['email']."'";?> )">
					</div>
					<div id="v_pass">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Confirm Password: 
					</div>
					<div class="field_kanan">
						<input name="confirm_password" type="password"  maxlength="24" onKeyUp="checkCPass(document.edit_form.confirm_password.value,document.edit_form.password.value)">
					</div>
					<div id="v_cpass">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Alamat: 
					</div>
					<div class="field_kanan">
						<input name="alamat" type="text"  maxlength="256">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Kota/Kabupaten: 
					</div>
					<div class="field_kanan">
						<input name="kota_kab" type="text"  maxlength="256">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Provinsi: 
					</div>
					<div class="field_kanan">
						<input name="provinsi" type="text"  maxlength="256">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Kode Pos: 
					</div>
					<div class="field_kanan">
						<input name="kode_pos" type="text"  maxlength="256">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						Nomor HP: 
					</div>
					<div class="field_kanan">
						<input name="no_hp" type="text"  maxlength="256">
					</div>
				</div>
				<div class="form_field">
					<div class="field_kiri">
						<input type="submit" name="submit" value="Edit">
					</div>
					<div class="field_kanan">
					
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
