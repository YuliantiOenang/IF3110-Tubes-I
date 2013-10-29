<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
	require 'php/connect.inc.php'; 
	require 'php/core.inc.php';
	include 'php/loginform.inc.php';
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style/style1.css" />  
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
<style type="text/css">

</style>
</head>
<body>

<div id="bestseller" align="center"><img src="image/Best Seller.png" width="855" height="66" /></div>
<div id="popupbox"> 
	<form name="login" action="" method="post">
        Username:
        <input name="username" min="5" />
        Password:
        <input name="password" type="password" min="8" />
		<center>
			<p>
				<input type="submit" name="submit" value="login" />					
			</p>
	  </center>
	  <center>
		<a href="javascript:login('hide');">close</a>
	  </center> 
  </form>
</div>

<div id="Home"><a href="index.php"><img src="image/RoSerBa Logo.PNG" alt="logo" width="74" height="66" align="left" /></a></div>
<div id="Banner" align="center"><img src="image/ruserba.png" width="279" height="69" /></div>
<div id="Kategori">
  <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
  	<option>Pilih Kategori </option>
    <option value="Jenis Barang/Tablet.php">Tablet</option>
    <option value="Jenis Barang/Notebook.php">Notebook</option>
    <option value="Jenis Barang/Console Game.php">Console Game</option>
    <option value="Jenis Barang/Smartphone.php">Smartphone</option>
	<option value="Jenis Barang/Hard Disk.php">Hard Disk</option>
  </select>
</div>
<div id="SearchBar">
  <input type="text" name="Search" id="Search" />
  <input type="submit" name="T.Search" id="T.Search" value="Cari Barang!" />
</div>
<div id="Login"><a href="php/logout.php">Logout </div>
<div id="Daftar" align="center" name="Selamat Datang"> <a href="php/editprofile.php"> <?php echo getuserfield('nama');?></a> </div>

<div id="bstablet">Tablet</div>
<div id="bstablet1"></div>
<div id="bstablet2"></div>
<div id="bstablet3"></div>

<div id="bsnotebook">Notebook</div>
<div id="bsnotebook1"></div>
<div id="bsnotebook2"></div>
<div id="bsnotebook3"></div>

<div id="bsconsole">Console Game</div>
<div id="bsconsole1"></div>
<div id="bsconsole2"></div>
<div id="bsconsole3"></div>

<div id="bssmartphone">Smartphone</div>
<div id="bssmartphone1"></div>
<div id="bssmartphone2"></div>
<div id="bssmartphone3"></div>

<div id="bsharddisk">Hard Disk</div>
<div id="bsharddisk1"></div>
<div id="bsharddisk2"></div>
<div id="bsharddisk3"></div>

<div id="bstablet">Tablet</div>
<div id="bstablet1"><a href="Jenis Barang/Tablet/Tablet1.php"><img src="image/GALAXY Tab 3 10.png" width="99" height="65" /></a></div>
<div id="bstablet2"><a href="Jenis Barang/Tablet/Tablet3.php"><img src="image/Apple iPad Mini 2.png" width="82" height="66" /></a></div>
<div id="bstablet3"><a href="Jenis Barang/Tablet/Tablet2.php"><img src="image/Google Nexus 7.png" width="67" height="67" /></a></div>

<div id="bsnotebook">Notebook</div>
<div id="bsnotebook1"><a href="Jenis Barang/Notebook/Notebook4.php"><img src="image/Alienware 17.png" width="89" height="67" /></a></div>
<div id="bsnotebook2"><a href="Jenis Barang/Notebook/Notebook2.php"><img src="image/Macbook Air 13inch.png" width="81" height="67" /></a></div>
<div id="bsnotebook3"><a href="Jenis Barang/Notebook/Notebook5.php"><img src="image/Acer Aspire M5-583P.png" width="107" height="69" /></a></div>

<div id="bsconsole">Console Game</div>
<div id="bsconsole1"><a href="Jenis Barang/Console Game/Console3.php"><img src="image/playstation 4.png" width="101" height="68" /></a></div>
<div id="bsconsole2"><a href="Jenis Barang/Console Game/Console1.php"><img src="image/Nintendo 3DS.png" width="75" height="69" /></a></div>
<div id="bsconsole3"><a href="Jenis Barang/Console Game/Console4.php"><img src="image/psp.png" width="125" height="65" /></a></div>

<div id="bssmartphone">Smartphone</div>
<div id="bssmartphone1"><a href="Jenis Barang/Smartphone/Smartphone1.php"><img src="image/Sony Xperia Z.png" width="37" height="68" /></a></div>
<div id="bssmartphone2"><a href="Jenis Barang/Smartphone/Smartphone4.php"><img src="image/Apple iPhone 5S.png" width="59" height="70" /></a></div>
<div id="bssmartphone3"><a href="Jenis Barang/Smartphone/Smartphone3.php"><img src="image/Samsung Galaxy S4.png" width="80" height="68" /></a></div>

<div id="bsharddisk">Hard Disk</div>
<div id="bsharddisk1"><a href="Jenis Barang/Hard Disk/Hard Disk2.php"><img src="image/Western Digital My Book Essential 3 TB.png" width="83" height="69" /></a></div>
<div id="bsharddisk2"><a href="Jenis Barang/Hard Disk/Hard Disk4.php"><img src="image/Hitachi Touro Mobile 1 TB.png" width="68" height="68" /></a></div>
<div id="bsharddisk3"><a href="Jenis Barang/Hard Disk/Hard Disk1.php"><img src="image/Western Digital My Book Essential 2 TB.png" width="68" height="68" /></a></div>

</body>
</html>
