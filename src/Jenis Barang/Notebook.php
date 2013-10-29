<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Notebook</title>
<link rel="stylesheet" type="text/css" href="../style/style1.css">
<script language="JavaScript" type="text/javascript">
function login(showhide){
		if(showhide == "show"){
			document.getElementById('popupbox').style.visibility="visible";
		}else if(showhide == "hide"){
			document.getElementById('popupbox').style.visibility="hidden"; 
		}
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>

<body>
<?php
$msq_user = 'root';
$msq_host = 'localhost';
$msq_pass = '';

if(mysql_connect($msq_host, $msq_user, $msq_pass)){
	if(mysql_select_db('ruserba2')){
		
		}else{
			die('conect error');
			}
	}else{
		die('coonect error');
		}
?>

<div id="Home"><a href="../index.php"><img src="../image/RoSerBa Logo.PNG" alt="logo" width="74" height="66" align="left" /></a></div>
<div id="Banner" align="center"><img id="logo" src="../image/ruserba.png" width="279" height="69" /></div>
<div id="Kategori">
  <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
  <option>Pilih Kategori </option>
  	<option value="../Jenis Barang/Tablet.php">Tablet</option>
    <option value="../Jenis Barang/Notebook.php">Notebook</option>
    <option value="../Jenis Barang/Console Game.php">Console Game</option>
    <option value="../Jenis Barang/Smartphone.php">Smartphone</option>
	<option value="../Jenis Barang/Hard Disk.php">Harddisk</option>
  </select>
</div>
<div id="SearchBar">
  <input type="text" name="Search" id="Search" />
  <input type="submit" name="T.Search" id="T.Search" value="Cari Barang!" />
</div>
<div id="KBarang">Notebook</div>

<?php
		$query = "SELECT `id`, `nama`, `harga`, `stok`, `terjual` FROM `notebook` ORDER BY `id`";
	$query_run = mysql_query($query);
	while ($query_row = mysql_fetch_assoc($query_run)){
					$id = $query_row['id'];
					$nama = $query_row['nama'];
					$harga = $query_row['harga'];
					$stok = $query_row['stok'];
					$terjual = $query_row['terjual'];
					
    echo "
		<div id='GBarang$id'><img id='gambar' src='../image/$nama.png'></div>
		<div id='NBarang$id'><a href='Notebook/Notebook$id.php'>$nama</a></div>
		
		<div id='HBarang$id'>Rp$harga</div>
		
		<div id='BBarang1'>
			<form id='belin1' name='belin1' method='post' action='' >
				<input type='submit' name='belinotebook1' id='belinotebook1' value='Beli' />
		  </form>
		</div>
		
		<div id='BBarang2'>
			<form id='belin2' name='belin2' method='post' action='' >
				<input type='submit' name='belinotebook2' id='belinotebook2' value='Beli' />
		  </form>
		</div>
		
		<div id='BBarang3'>
			<form id='belin3' name='belin3' method='post' action='' >
				<input type='submit' name='belinotebook3' id='belinotebook3' value='Beli' />
			</form></div>
			  
		<div id='BBarang4'>
			<form id='belin4' name='belin4' method='post' action='' >
				<input type='submit' name='belinotebook4' id='belinotebook4' value='Beli' /> </form></div>
		<div id='BBarang5'>
			<form id='belin5' name='belin5' method='post' action='' >
				<input type='submit' name='belinotebook5' id='belinotebook15 value='Beli' /> </form>
		</div>";
	}
?>
</body>
</html>