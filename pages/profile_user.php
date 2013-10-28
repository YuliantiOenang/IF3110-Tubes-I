<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<script type="text/javascript" src="../js/register_user.js"></script>
<script type="text/javascript" src="../js/general.js"></script>

<head>
	<title>Register User</title>	

</head>
<body>
	<div class = "page_container">
		<?php include ("../templates/header.php"); ?>
		<?php include ("../templates/navigation.php"); ?>
		
		<div class = "container">
			<?php
				$username = $_SESSION['username'];
				echo "<h1>Profil ".$username."</h1>";
				
				//quering data to get all information
				include ("../controllers/connect_database.php");
				$result = mysqli_query($con,"SELECT * FROM pengguna WHERE username = '".$username."'");
				
				$user_id = 0;
				$data;
				while($row = mysqli_fetch_array($result)){
					echo "<p>Full Name : ".$row['nama_pengguna']."</p>";
					$data = $row;
					break;
				}
				
				$user_id = $data['id_pengguna'];
				
				//show all data profiles
				echo "<p>Nama lengkap : ".$data['nama_pengguna']."</p>";
				echo "<p>Email : ".$data['email']."</p>";
				echo "<p>Nomor HP : ".$data['nomor_hp']."</p>";
				echo "<p>Alamat : ".$data['alamat']."</p>";
				echo "<p>Provinsi : ".$data['provinsi']."</p>";
				echo "<p>Kota/Kabupaten : ".$data['kota_kabupaten']."</p>";
				echo "<p>Kode Pos : ".$data['kode_pos']."</p>";
				
				//count transactions
				$result = mysqli_query($con,"SELECT * FROM transaksi WHERE id_pengguna = ".$user_id);
				
				$count = $result->num_rows;
				echo "<p>Total transactions : ".$count."</p>";
				
			?>
			<form action = "edit_profil_user.php">
				<button type="submit">Edit Profile</button>
			</form>
		</div>
		
		<?php include ("../templates/footer.php"); ?>
	</div>
</body>
</html>