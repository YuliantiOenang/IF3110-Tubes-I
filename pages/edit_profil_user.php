<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<script type="text/javascript" src="../js/edit_user.js"></script>
<script type="text/javascript" src="../js/general.js"></script>

<head>
	<title>Login User</title>	

</head>
<body>
	<div class = "page_container">
		
		<?php include ("../templates/header.php"); ?>
		<?php include ("../templates/navigation.php"); ?>
		
		<div class = "container">
			<?php	
				//get username's data
				include ("../controllers/connect_database.php");
				$username = $_SESSION['username'];
				$result = mysqli_query($con,"SELECT * FROM pengguna WHERE username = '".$username."'");
				echo "<h1>Profil ".$username."</h1>";
				
				while($row = mysqli_fetch_array($result)){
					$data = $row;
					break;
				}
			?>
			<form action="" method="post">
				<p>nama lengkap</p>
				<input id="name" name="name" type="text" value=<?php echo $data['nama_pengguna']?> onkeyup="checkFullName(this.value)"></input>
				<p id="fullname_status"></p>
				<p>email</p>
				<input id="email" name="email" type="text" value=<?php echo $data['email']?> onkeyup="checkEmailValid(this.value)"></input>
				<p id="email_status"></p>
				<p>nomor handphone (min 8 digits)</p>
				<input id="no_hp" name="no_hp" type="text" value=<?php echo $data['nomor_hp']?> onkeyup="checkNomorHP(this.value)"></input>
				<p id="nomor_hp"></p>
				<p>alamat</p>
				<input id="alamat" name="alamat" type="text" value=<?php echo $data['alamat']?> onkeyup="checkAddress(this.value)"></input>
				<p id="alamat_status"></p>
				<p>provinsi</p>
				<input id="provinsi" name="provinsi" type="text" value=<?php echo $data['provinsi']?>  onkeyup=""></input>
				<p>kota/kabupaten</p>
				<input id="kota_kabupaten" name="kode_kabupaten_status" value=<?php echo $data['kota_kabupaten']?> type="text" onkeyup="checkKotaKabupaten(this.value)"></input>
				<p id="kota_kabupaten_status"></p>
				<p>kode pos</p>
				<input id="kodepos" name="kodepos" value=<?php echo $data['kode_pos']?> type="text" onkeyup="checkKodePos(this.value)"></input>
				<p id="kodepos_status"></p>
				<button type = "submit" id="button_register" disabled="true">Update</button>
			</form>
			
			
		</div>
		
		<?php include ("../templates/footer.php"); ?>
	</div>
</body>
</html>