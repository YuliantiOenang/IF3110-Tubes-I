<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTC One Max</title>
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

<div id="NBarang">HTC One Max</div>
<div id="GBarang"><img src="../../image/HTC One Max.png" width="216" height="211" /></div>
<div id="InfoBarang">
  <p>SIM: Micro-Sim<br />
    </p>
  <p>Dimensi: 164.5 x 82.5 x 10.3 mm<br />
    </p>
  <p>Berat: 217 g<br />
    </p>
  <p>Ukuran Layar: 1080 x 1920 pixels; 5,9 inch<br />
    </p>
  <p>Memori: microSD up to 64 GB, internal 16/32 GB 2 GB RAM<br />
    </p>
  <p>Kamera: 4 MP, 2688 x 1520 pixels (belakang) 2.1 MP (depan)<br />
    </p>
  <p>OS: Android OS v4.3 (Jelly Bean)<br />
    </p>
  <p>CPU: Quad-core 1.7 GHz Krait 300<br />
    </p>
  <p>Harga: 40000</p>
</div>
<div id="BeliBarang">
<form id="belis5" name="belis5" method="post" action="" >
		<input type="submit" name="Belismartphone5" id="Belismartphone5" value="Beli" />
  </form>
  </div>
</body>
</html>