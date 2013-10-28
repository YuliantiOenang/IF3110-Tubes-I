<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />
<head>
	<title>Toko Imba</title>	
</head>
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
			}?>
		
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
				
				echo "<h2>Hasil Pencarian</h2>"; 
				//echo $_GET['query_name']. " ". $_GET['query_category']. " " . $_GET['query_price']; 
				// Create connection
				$con=mysqli_connect("127.0.0.1","root","","toko_imba");

				if (mysqli_connect_errno($con)){
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				
				$result = mysqli_query($con,"SELECT * FROM kategori NATURAL JOIN inventori WHERE nama_kategori LIKE '".$_GET['query_category']."' AND harga LIKE ".$_GET['query_price']." AND nama_inventori LIKE '". $_GET['query_name'] ."'");
				
				while($row = mysqli_fetch_array($result)){
					echo "<img src='../img/". $row['gambar'] ."'> <br/>";
					echo "Nama: <a href='details.php?gid=". $row['id_inventori'] ."'>". $row['nama_inventori'] . " </a><br/>";
					echo "Harga: Rp".$row['harga']." <br/>";
					echo "Kategori: ". getFormalName($row['nama_kategori'])."<br/>";
				}
			?>
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
</html>