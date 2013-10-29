<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Samsung Galaxy S4</title>
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

<div id="NBarang">Samsung Galaxy S4</div>
<div id="GBarang"><img src="../../image/Samsung Galaxy S4.png" width="251" height="213" /></div>
<div id="InfoBarang">
  <p>SIM: Micro-SIM<br />
    </p>
  <p>Dimensi: 136.6 x 69.8 x 7.9 mm<br />
    </p>
  <p>Berat: 130 g<br />
    </p>
  <p>Ukuran Layar: 1080 x 1920 pixels; 5.0 inch<br />
    </p>
  <p>Memori: microSD up to 64 GB, internal16/32/64 2GB RAM<br />
    </p>
  <p>Kamera: 13 MP, 4128 x 3096 pixels (belakang) 2 MP (depan)<br />
    </p>
  <p>OS: Android OS v4.2.2 (Jelly Bean)<br />
    </p>
  <p>CPU: Quad-Core 1.6 GHZ Cortex-A15<br />
    </p>
  <p>Harga: 35000</p>
</div>
<div id="BeliBarang">
<form id="belis3" name="belis3" method="post" action="" >
		<input type="submit" name="Belismartphone3" id="Belismartphone3" value="Beli" />
  </form>
  </div>
</body>
</html>