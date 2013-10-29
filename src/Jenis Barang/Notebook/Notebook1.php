<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Microsot Surface Pro</title>
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

<div id="NBarang">Microsoft Surface Pro</div>
<div id="GBarang"><img src="../../image/Microsoft Surface Pro.png" width="284" height="207" /></div>
<div id="InfoBarang">
<p> OS: Windows 8 Pro </p>
<p> Dimensi: 275 x  173 x 13 mm </p>
<p>Berat: 907 g  </p>
<p>Ukuran Layar: 1920 x 1080 pixels; 10.6 inch  </p>
<p>Processor: Intel Core i5-3317U 1700MHz  </p>
<p>Graphic Processor: Intel HD Graphics 4000  </p>
<p>RAM: 4096 MB  </p>
<p>Storage: 64 GB</p>
<p> Harga: 30000 </p>
</div>
<div id="BeliBarang">
<form id="belin1" name="belin1" method="post" action="" >
		<input type="submit" name="BeliNotebook1" id="BeliNotebook1" value="Beli" />
  </form>
  </div>
</body>
</html>
