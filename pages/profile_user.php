<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<script type="text/javascript" src="../js/register_user.js"></script>
<script type="text/javascript" src="../js/general.js"></script>

<head>
	<title>Profile User</title>	

</head>
<body>
	<?php
		//check if user is logged
		$continue = true; 
		session_start();
		if(isset($_SESSION['on'])){
			if(!$_SESSION['on']){
				echo "<meta http-equiv='refresh' content='=0;register_user.php' />";
				$continue = false;
			}
		} else{
			echo "<meta http-equiv='refresh' content='=0;register_user.php' />";
			$continue = false;
		}
	?>
	<?php if($continue){ ?>
	<div class = "page_container">
		<?php 
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
				$result = mysqli_query($con,"SELECT * FROM pengguna WHERE id_pengguna = ".$user_id);
				while($row = mysqli_fetch_array($result)){
					$count = $row['total_transaksi'];
				}
				echo "<p>Total transactions : ".$count."</p>";
				
			?>
			<form action = "edit_profil_user.php">
				<button type="submit">Edit Profile</button>
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
	<?php } ?>
</body>
</html>