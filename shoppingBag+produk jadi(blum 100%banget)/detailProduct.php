<?php
	include("connect.php");
	include("functions.php");
	
	if ( isset($_REQUEST['command']) && $_REQUEST['command'] == 'add' && isset($_REQUEST['productid']) && isset($_REQUEST['sum'])&& $_REQUEST['sum']>0 ){
		$pid=$_REQUEST['productid'];
		$jum=$_REQUEST['sum'];
		addtocart($pid,$jum);
		header("location:shoppingcart.php");
		exit();
	}
?>

<html>

<head>
	<title>Detail Product</title>
	<script language="javascript">
		function addtocart(pid){
			document.form2.productid.value=pid;
			document.form2.command.value='add';
			document.form2.submit();
		}
	</script>
</head>

<body>
	
<?php
	if(isset($_GET['id']))
		$id = $_GET['id'];
    else echo 'session problem';
	
	/* Get data. */
	$result = mysql_query("select * from barang where id = '$id'")or die("select * from barang"."<br/><br/>".mysql_error());

	echo "<br><br><br><br>";
	while($row = mysql_fetch_array($result)){
		echo '<img src= "'.$row['path'].'" width="150" height="150" />';
		echo "<br>Nama		:" . $row['namabarang'];
		echo "<br>Harga		:" . convert_to_rupiah($row['harga']);
		echo "<br>Kategori	:" . $row['kategori'];
		echo "<br> Spesifikasi:"; 
		echo "<br>" . $row['keterangan'];
		echo "<br><br> Keterangan (Tambahan Permintaan):<br>";
		echo '<input type="text" style="width:350px;height:100px;" name="ket" value="">';
		echo "<br><br>";
?>
		<form name="form2">
			<input type="hidden" name="productid"/>
			<input type="number" name="sum" min="1"/>
			<input type="hidden" name="command" />
			<input type="button" value="Buy" onclick="addtocart(<?php echo $row['id'];?>)" />
			<br />
		</form>
<?php
	}
?>
</body>
</html>