<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Playstation 3</title>
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
<div id="NBarang">Playstation 3</div>
<div id="GBarang"><img src="../../image/sony playstation 3.png" width="210" height="210" /></div>
<div id="InfoBarang">  <p>Media : Blu-ray Disc, DVD, CD, Playstation Disc, PS2 disc</p>
  <p>OS : XrossMediaBar Sysytem Software v4.46</p>
  <p>CPU :3.2GHz</p>
  <p>Storage :2.5-inch SATA (upgradable)</p>
  <p>Memory : 256 MB system, 256 MB video</p>
  <p>Graphics : 550MHz NVIDIA/SCEI RSX 'Reality Synthesizer'</p></div>
<div id="BeliBarang">
<form id="belic2" name="belic2" method="post" action="" >
		<input type="submit" name="Beliconsole2" id="Beliconsole2" value="Beli" />
  </form>
  </div>
</body>
</html>