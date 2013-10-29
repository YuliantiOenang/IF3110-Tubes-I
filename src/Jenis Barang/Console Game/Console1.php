<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nintendo 3Ds</title>
<link rel="stylesheet" type="text/css" href="../../style/style1.css">
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
<header>

<div id="Home"><a href="../../index.php"><img src="../../image/RoSerBa Logo.PNG" alt="logo" width="74" height="66" align="left" /></a></div>
<div id="Banner" align="center"><img src="../../image/ruserba.png" width="279" height="69" /></div>
<div id="Kategori">
  <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
  	<option>Pilih Kategori </option>
    <option value="../Tablet.php">Tablet</option>
    <option value="../Notebook.php">Notebook</option>
    <option value="../Console Game.php">Console Game</option>
    <option value="../Smartphone.php">Smartphone</option>
    <option value="../Hard Disk.php"> Hard Disk</option>
  </select>
</div>
<div id="SearchBar">
  <input type="text" name="Search" id="Search" />
  <input type="submit" name="T.Search" id="T.Search" value="Cari Barang!" />
</div>
</header>
<div id="NBarang">Nintendo 3Ds</div>
<div id="GBarang"><img src="../../image/Nintendo 3Ds.png" width="231" height="214" /></div>
<div id="InfoBarang"><p>Media : Nintendo 3DS game card, Nintendo DS game card</p>
  <p>CPU :  Dual-Core ARM11 MPCore</p>
  <p>Storage :2 GB SD card,1 GB internal flash memory,Cartridge save</p>
  <p>Memory : 128 MB FCRAM, 6 MB VRAM</p>
  <p>Graphics : DMP PICA200 GPU</p></div>
<div id="BeliBarang">
<form id="belic1" name="belic1" method="post" action="" >
		<input type="submit" name="Beliconsole1" id="Beliconsole1" value="Beli" />
  </form>
  </div>
</body>
</html>