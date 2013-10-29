<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<script type="text/javascript" src="../js/edit_users.js"></script>
<script type="text/javascript" src="../js/general.js"></script>

<head>
	<title>Login User</title>	

</head>
<body>
	<div class = "page_container">
		<?php 
			session_start();
			$_SESSION['state'] = 1;
			
			if($_SESSION['state'] == 1){
				include ("../templates/header.php");
				include ("../templates/navigation.php"); 
			}
			else{
				include ("templates/header.php");
				include ("templates/navigation.php"); 
			}
		?>
		
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
			<form action="../controllers/update_profil.php" method="post">
				<p>nama lengkap</p>
				<input type="hidden" name="username" id="username" value=<?php echo $_SESSION['username']; ?> />
				<input id="nama_pengguna" name="nama_pengguna" type="text" value=<?php echo $data['nama_pengguna'];?> onkeyup="checkFullName(this.value)" />
				<p id="fullname_status"></p>
				<p>email</p>
				<input id="email" name="email" type="text" value=<?php echo $data['email'];?> onkeyup="checkEmailValid(this.value)" />
				<p id="email_status"></p>
				<p>nomor handphone (min 8 digits)</p>
				<input id="nomor_hp" name="nomor_hp" type="text" value=<?php echo $data['nomor_hp'];?> onkeyup="checkNomorHP(this.value)" />
				<p id="nomor_hp"></p>
				<p>alamat</p>
				<input id="alamat" name="alamat" type="text" value=<?php echo $data['alamat'];?> onkeyup="checkAddress(this.value)"/>
				<p id="alamat_status"></p>
				<p>provinsi</p>
				<input id="provinsi" name="provinsi" type="text" value=<?php echo $data['provinsi'];?> />
				<p>kota/kabupaten</p>
				<input id="kota_kabupaten" name="kota_kabupaten" value=<?php echo $data['kota_kabupaten'];?> type="text" onkeyup="checkKotaKabupaten(this.value)" />
				<p id="kota_kabupaten_status"></p>
				<p>kode pos</p>
				<input id="kode_pos" name="kode_pos" value=<?php echo $data['kode_pos'];?> type="text" onkeyup="checkKodePos(this.value)" />
				<p id="kodepos_status"></p>
				<button type = "submit" id="button_register">Update</button>
			</form>
			
			
		</div>
		
		<?php 
			if($_SESSION['state'] == 1){
				include ("../templates/footer.php");
			}
			else{
				include ("templates/footer.php");
			} 
		?>
	</div>
</body>
</html>