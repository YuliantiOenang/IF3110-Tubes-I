<html>

<?php
require_once('header.php'); ?>

<body>
	
<?php
	include ("functions.php");
	session_start();
	if(isset($_GET['nama']))
		$nama = $_GET['nama'];
    else echo 'session problem';
	
	$con=mysqli_connect("localhost","root","","tubesweb");
	
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	/* Get data. */
	$tbl_name="barang";		//table's name
	$sql = "SELECT * FROM $tbl_name WHERE namabarang = '$nama'";
	$result = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($result))
	{
		echo '
		<div id="divdetail">
		<form id="formdetail" name="formregistrasi" >  <br/>
		<img src="',$row['path'],'" width="150" height="150" />
		<br> <b>',$row['namabarang'],'</b>
		<br>Harga	&nbsp;:',convert_to_rupiah($row['harga']),' IDR <br>Kategori &nbsp;	:',$row['kategori'],'
		<br> <br>Spesifikasi: <br>', $row['keterangan'],'<br><br> Keterangan (Tambahan Permintaan):<br><br> 
		<input align="left" type="text" style="width:350px;height:100px;" name="ket" value=""> <br><br>
		</form
		</div>';
	
	
		
?>
	<form action="shoppingcart.php" method="post">
		<?php
			// store session data
			$_SESSION['id']=$row['id'];
		?>
		<input type="number" style="width:45px;height:20px;" name="sum" min="1">
		<button type="submit" style="width:45px;height:30px;">beli</button>
		<br />
	</form
<?php
	}
?>

</body>
</html>