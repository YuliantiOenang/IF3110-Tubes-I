<!DOCTYPE html>

<html>
<body>
<?php

// global variables

function DisplayBarang(){
	$con=mysqli_connect("localhost","root","","barang");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	$GLOBALS['result'] = mysqli_query($con,"SELECT * FROM DaftarBarang WHERE ID='" . $GLOBALS['id'] . "'");
	
	while($row = mysqli_fetch_array($GLOBALS['result']))
	  { 
	  echo "Detail Barang :";
	  $link = "barang.php?kat=".$row['Kategori'];
	  ?>
	  <div style="background-color: #dddddd; margin: 0px 2px 0px 2px">
		<img src="res/<?php echo $row['Gambar']; ?>"><br/>
		<pre><?php echo 'Nama : '.$row['Nama']; ?></pre>
		<pre><?php echo 'Harga : '.$row['Harga']; ?></pre>
		<pre><?php echo 'Kategori : '.$row['Kategori']; ?></pre>
		<pre><?php echo 'Keterangan : '.$row['Keterangan']; ?></pre>
		<pre><?php echo 'Stok : '.$row['Stok']; ?></pre>
		<textarea rows="10" cols="100">Tambahan permintaan.</textarea>
		<form name="input" action="<?php echo $link; ?>" onsubmit="return validateForm()" method="post">
		Jumlah: <input type="number" name="jumlah">
		<input type="submit" value="BUY!">
		</form> 
	</div>
	  <?php }

	mysqli_close($con);
}

if (isset($_GET['id'])) $GLOBALS['id'] = $_GET['id'];
DisplayBarang();

?> 

<script>
function validateForm()
{
var x=document.forms["input"]["jumlah"].value;
if (x==null || x=="" || !isFinite(x))
  {
  alert("Jumlah pembelian tidak sesuai..");
  return false;
  }
alert("Pembelian sukses! (not implemented yet.. )");
}
</script>
</body>
</html>
