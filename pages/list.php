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

				//check data posted
				echo "<h2>Category: " . getFormalName($_GET['cat'])."</h2><br/>";
				
				$category = $_GET['cat'];
				
				$result = mysqli_query($con,"SELECT * FROM kategori NATURAL JOIN inventori WHERE nama_kategori = '".$category."'");
				
				$found = false;
				while($row = mysqli_fetch_array($result)){
					$found = true;
					echo "ID: ". $row['id_inventori'] . "<br/>";
					echo "Nama: ". $row['nama_inventori'] . "<br/>";
					echo "Kategori: ". getFormalName($row['nama_kategori']) . "<br/>";
					echo "<a href='detail.php?gid=". $row['id_inventori'] ."'>Lihat</a>" . "<br/>";
				}
				
				if(!$found){
					echo "No result found.";
				}
				mysqli_close($con);

			?>
		</div>
		
	</div>
		<?php include ("../templates/footer.php");?>
</html>