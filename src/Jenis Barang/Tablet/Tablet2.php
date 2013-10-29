<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<title>Google Nexus 7</title>
</head>

<body>
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
<div id="NBarang">Google Nexus 7</div>
<div id="GBarang"><img src="../../image/Google Nexus 7.png" width="209" height="209" /></div>
<div id="InfoBarang">
<p>SIM: -</p>
  <p>Dimensi: 198.5 x 120 x 10.5 mm </p>
  <p>Berat: 340 g</p>
  <p>Ukuran Layar: 800 x 1280 pixels</p>
  <p>Memori: internal 8/16 GB 1 GB RAM</p>
  <p>Kamera: 1.2 MP (depan)</p>
  <p>OS: Android OS, v4.1 (Jelly Bean)</p>
  <p>CPU: Quad-core 1.2 GHz Cortex A-9 </p>
  <p>Harga: 15000</p>
</div>
<div id="BeliBarang">
<form id="belit2" name="belit2" method="post" action="" >
		<input type="submit" name="BeliTablet2" id="BeliTablet2" value="Beli" />
  </form>
  </div>
</body>
</html>
