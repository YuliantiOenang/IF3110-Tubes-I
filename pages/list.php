<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<head>
	<title>Toko Imba</title>	

</head>
	<div class = "page_container">

		<?php include ("../templates/header.php"); ?>
		<?php include ("../templates/navigation.php"); ?>

		<div class = "container">
			<?php
				function getFormalName($name){
					if($name == "baking")
						return "Baking";
					elseif($name == "beverages")
						return "Beverages";
					elseif($name == "cansoups")
						return "Canned Goods & Soups";
					elseif($name == "fresh")
						return "Fresh Food";
					elseif($name == "household")
						return "Household Essentials";
					
				}
			
				// Create connection
				$con=mysqli_connect("127.0.0.1","root","","toko_imba");

				// Check connection
				if (mysqli_connect_errno($con)){
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				//mysqli_query($con,"INSERT INTO pengguna (id_pengguna, nama_pengguna)
				//VALUES ('Peter', 'Griffin')");

				//check data posted
				echo $_GET['cat']."<br/>";
				//echo "Submit query".'<br/>';
				//echo $_POST['name'].'<br/>';
				//echo $_POST['username'].'<br/>';
				//echo $_POST['password'].'<br/>';
				//echo $_POST['email'].'<br/>';
				
				$category = $_GET['cat'];
				// $name = $_POST['name'];
				// $username = $_POST['username'];
				// $password = $_POST['password'];
				// $email = $_POST['email'];
				
				//do insertion query
				//echo "INSERT INTO pengguna (nama_pengguna, username, password, email) VALUES ('".$name."','".$username."','".$password."','".$email."')";
				
				//checking if username is not available
				$result = mysqli_query($con,"SELECT * FROM kategori INNER JOIN inventori WHERE nama_kategori = '".$category."'");
				
				while($row = mysqli_fetch_array($result)){
					echo "ID: ". $row['id_inventori'] . "<br/>";
					echo "Nama: ". $row['nama_inventori'] . "<br/>";
					echo "Kategori: ". getFormalName($row['nama_kategori']) . "<br/>";
					echo "<a href='detail.php?gid=". $row['id_inventori'] ."'>Lihat</a>" . "<br/>";
				}
				mysqli_close($con);

			?>
		</div>
		
	</div>
		<?php include ("../templates/footer.php");?>
</html>