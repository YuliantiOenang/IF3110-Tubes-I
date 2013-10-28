<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<head>
	<title>Toko Imba</title>
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
				}
			}
			?>
			<div class = "image">
				<img width=500px src='../img/<?php echo $row['gambar'];?>'> <br/>
			</div>
			<div class = "data">
				ID: <?php echo $row['id_inventori'];?><br/>
				Nama Barang: <?php echo $row['nama_inventori'];?><br/>
				Kategori: <?php echo $row['nama_kategori'];?><br/><br/>
				<?php echo $row['description'];?><br/>
				<form novalidate> Permintaan Khusus : <br/> 
					<input class="textinput" width=200 height=100 type='text' name='tambahan'> 
				</form>
				<form> Quantity : <input type='number' name='quantity'> </form>
				<?php mysqli_close($con); ?>
			</div>
		</div>
</div>
		<?php include ("../templates/footer.php");?>
</body>
</html>