<!DOCTYPE html>

<html>
<body>

<?php

// global variables
$kat = "";

// --> Di index.php <-- Menampilkan seluruh kategori barang yang tersedia
function DisplayAllKategori(){
	echo "Kategori Barang : <br/>";
	
	$con=mysqli_connect("localhost","root","","barang");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	$result = mysqli_query($con,"SELECT DISTINCT Kategori FROM DaftarBarang");

	while($row = mysqli_fetch_array($result))
	  {
	  $link = "barang.php?kat=".$row['Kategori'];
	  echo "<a href= $link>" .$row['Kategori'] . "</a>";
	  echo "<br>";
	  }

	mysqli_close($con);
}

function FilterKategori(){
	$con=mysqli_connect("localhost","root","","barang");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	if ($GLOBALS['type'] == 0) $GLOBALS['result'] = mysqli_query($con,"SELECT * FROM DaftarBarang WHERE Kategori='" . $GLOBALS['kat'] . "'");
	if ($GLOBALS['type'] == 1) $GLOBALS['result'] = mysqli_query($con,"SELECT * FROM DaftarBarang WHERE Kategori='" . $GLOBALS['kat'] . "' ORDER BY Nama");
	if ($GLOBALS['type'] == 2) $GLOBALS['result'] = mysqli_query($con,"SELECT * FROM DaftarBarang WHERE Kategori='" . $GLOBALS['kat'] . "' ORDER BY Harga");
	
	mysqli_close($con);
}

function DisplayKategori(){
	while($row = mysqli_fetch_array($GLOBALS['result']))
	  { ?>
	  <div style="background-color: #dddddd; margin: 0px 2px 0px 2px">
		<img src="res/<?php echo $row['Gambar']; ?>"><br/>
		<?php
		$link = "detailbarang.php?id=".$row['ID'];
		echo "<a href= $link>" .$row['Nama'] . "</a>";
		echo "<br/><br/>";
		?>
		<form name="input" onsubmit="return validateForm()" method="post">Jumlah: <input type="number" name="jumlah">
		<input type="submit" value="BUY!">
		<pre><?php echo 'Harga : '.$row['Harga']; ?><br/><br/></pre>
	  </div>
	  <?php }
}

function DisplaySort(){
	$link = "barang.php?kat=".$GLOBALS['kat']."&type=1";
	echo "<form name='input' method='post' action='".$link."'>";
	echo "<input type='submit' name='button' value='Sort by Nama'>";
	echo "</form>";
	
	$link2 = "barang.php?kat=".$GLOBALS['kat']."&type=2";
	echo "<form name='input' method='post' action='".$link2."'>";
	echo "<input type='submit' name='button' value='Sort by Harga'>";
	echo "</form>";
}

DisplayAllKategori();
if (isset($_GET['kat'])) $GLOBALS['kat'] = $_GET['kat'];
if (isset($kat)) {
	if (isset($_GET['type'])) $type = $_GET['type'];
	else $type = 0;
	if (!isset($result)) FilterKategori();
	if (isset($result)) DisplaySort();
	if (isset($result)) DisplayKategori();
}

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

