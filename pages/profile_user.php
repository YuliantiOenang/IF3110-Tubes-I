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
				while($row = mysqli_fetch_array($result)){
					echo "<p>Full Name : ".$row['nama_pengguna']."</p>";
					$user_id = $row['id_pengguna'];
					break;
				}
				
				$result = mysqli_query($con,"SELECT * FROM transaksi WHERE id_pengguna = ".$user_id);
				
				$count = $result->num_rows;
				echo "<p>Total transactions : ".$count."</p>";
				
			?>
			<form>
				<button type="submit">Edit Profile</button>
			</form>
		</div>
		
		<?php include ("../templates/footer.php"); ?>
	</div>
</body>
</html>