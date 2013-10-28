<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<head>
	<title>Toko Imba></title>
</head>

<body>

<div class = "page_container">

		<?php include ("../templates/header.php"); ?>
		<?php include ("../templates/navigation.php"); ?>

		<div class = "container">
			<?php
			// Create connection
			$con=mysqli_connect("127.0.0.1","root","","toko_imba");
			//check ada ga gidnya
			$gid=$_GET['gid'];
			if(isset($gid)){
			//cek numeric apa nggak
				if(!is_numeric($gid)){
				//Non numeric value entered. Someone tampered with the bookid
					$error=true;
					$errormsg=" Goods ID is not numeric value.".$gid."";
				} else {
				//book_id is numeric number
				//clean it up
					$cgID=mysqli_real_escape_string($con,$gid);
				//nyari nama category
					$result = mysqli_query($con,"SELECT * FROM inventori NATURAL JOIN kategori WHERE id_inventori = ".$cgID);
					$row = mysqli_fetch_array($result);
					echo "ID: ". $row['id_inventori'] . "<br/>";
					echo "Nama Barang: ". $row['nama_inventori'] . "<br/>";
					echo "Kategori: ".$row['nama_kategori'] . "<br/>";
					echo "Jumlah Stok Tersisa : ".$row['jumlah'] . "<br/>";
					echo "<form class = 'form' novalidate> Permintaan Khusus : <br/> <input type='text' name='tambahan'> </form>";
					echo "<form> Quantity : <input type='number' name='quantity'> </form>";
					
					mysqli_close($con);
				}
			}
			?>
		</div>
		
	</div>
		<?php include ("../templates/footer.php");?>
</body>
</html>