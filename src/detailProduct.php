<?php
require_once('header.php'); ?>
<?php
	include("connect.php");
	
	if ( isset($_REQUEST['command']) && $_REQUEST['command'] == 'add' && isset($_REQUEST['productid']) && isset($_REQUEST['sum'])&& $_REQUEST['sum']>0 ){
		$pid=$_REQUEST['productid'];
		$jum=$_REQUEST['sum'];
		addtocart($pid,$jum);
		echo'<script> window.location="shoppingcart.php"; </script> ';
		exit();
	}
?>

<html>

<head>
	<title>Detail Product</title>
	<script language="javascript">
		function addtocart(pid){
			document.formdetail.productid.value=pid;
			document.formdetail.command.value='add';
			document.formdetail.submit();
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
		echo '
		<div id="divdetail">
		<form id="formdetail" name="formdetail" >  <br/>
		<img src="',$row['path'],'" width="150" height="150" />
		<br> <b>',$row['namabarang'],'</b>
		<br>Harga	&nbsp;:',convert_to_rupiah($row['harga']),' IDR <br>Kategori &nbsp;	:',$row['kategori'],'
		<br> <br>Spesifikasi: <br>', $row['keterangan'],'<br><br> Keterangan (Tambahan Permintaan):<br><br> 
		<input align="left" type="text" style="width:350px;height:100px;" name="ket" value=""> <br><br>
		<input type="hidden" name="productid"/>
			<input type="number" name="sum" min="1"/>
			<input type="hidden" name="command" />
			<input type="button" value="Buy" onclick="addtocart(',$row['id'],')" />
		</form
		</div>';
?>
			
			<br />
<?php
	}
?>
</body>
</html>