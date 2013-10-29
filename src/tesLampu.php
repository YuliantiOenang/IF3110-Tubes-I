<?php
	$profpic = "Background.jpg";
?>

<html>
<head>
<style type="text/css">
body {
	background-image: url('<?php echo $profpic;?>');
}
.bg{
	width: 150px;
    height: 150px;
    position: relative;
    left: 100;
	top : 10;
}
.bg1{
	width: 150px;
    height: 150px;
    position: relative;
    left: 300;
	top : -265;
}
.bg2{
	width: 150px;
    height: 150px;
    position: relative;
    left: 510;
	top : -540;
}
.bg3{
	width: 150px;
    height: 150px;
    position: relative;
    left: 730;
	top : -815px;
}
.bg4{
	width: 150px;
    height: 150px;
    position: relative;
    left: 950;
	top : -1090;
}
.bg5{
	width: 150px;
    height: 150px;
    position: relative;
    left: 100;
	top : -1030;
}
.bg6{
	width: 150px;
    height: 150px;
    position: relative;
    left: 307;
	bottom : 1305;
}
.bg7{
	width: 150px;
    height: 150px;
    position: relative;
    left: 519;
	bottom : 1580;
}
.bg8{
	width: 150px;
    height: 150px;
    position: relative;
    left: 737;
	bottom : 1855;
}
.bg9{
	width: 150px;
    height: 150px;
    position: relative;
    left : 950;
	bottom : 2128;
}
.content {
     width: 120px;
     height: 60px;
     position: relative;
     padding: 30px;
     text-align: center;
	 top : 0px;
	 left : 90px;
	 
}
.content1 {
     width: 120px;
     height: 60px;
     position: relative;
     padding: 30px;
     text-align: center;
	 bottom : 275px;
	 left : 290px;
}
.content2 {
      width: 120px;
     height: 60px;
     position: relative;
     padding: 30px;
     text-align: center;
	 top : -553;
	 left : 500px;
}
.content3 {
     width: 120px;
     height: 60px;
     position: relative;
     padding: 30px;
     text-align: center;
	 top : -830;
	 left : 725px;
}
.content4 {
      width: 120px;
     height: 60px;
     position: relative;
     padding: 30px;
     text-align: center;
	 bottom : 1105;
	 left : 936px;
}
.content5 {
      width: 120px;
     height: 60px;
     position: relative;
     padding: 30px;
     text-align: center;
	 top : -1040px;
	 left : 90px;
}
.content6 {
      width: 120px;
     height: 60px;
     position: relative;
     padding: 30px;
     text-align: center;
	 top : -1315;
	 left : 299px;
}.content7 {
      width: 120px;
     height: 60px;
     position: relative;
     padding: 30px;
     text-align: center;
	 top : -1590;
	 left : 500px;
}
.content8 {
      width: 120px;
     height: 60px;
     position: relative;
     padding: 30px;
     text-align: center;
	 top : -1864;
	 left : 730px;
}
.content9 {
      width: 120px;
     height: 60px;
     position: relative;
     padding: 30px;
     text-align: center;
	 top : -2138;
	 left : 930px;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lampu</title>
</head>
<body>

	<div id="menu">
			<a href="index.php"><strong><font size="3px" face="sans" color="green" >Beranda</font></strong></a>
			<a href="index.php"><strong><font size="3px" face="sans" color="green" >Daftar Kategori</font></strong></a>
	</div>
	<p><font color = "green" > <h1> Daftar Barang </h1> </font></P>
	<font color ="green" ><h3> Lampu </h3> 
	<img src="barang/Lampu1.jpg" alt="gambar" class="bg" height = "23px"  />
	<div class="content">
	<form id="form1" name="form1" method="post" action="notif.php"> 
        <a href="detil.php?cek=Lampu1"><font size="3px" face="sans" color="Brown" >Lampu1</font></a><br>
		<font size = "3px" color = "brown" > 
		Rp 200.120.000,- </font><br>
		<tr>
			<th <width="16" height ="0"><font color ="brown" >Jumlah</font></th>
			<td width="12" align="left"><input name="Jumlah" type = "text" id ="Jumlah" size="2" /></td><br>
		</tr>
		<tr>
			<td align="left"><input type="submit" name="kirim" id="kirim" value="Beli"/></td>
		</tr>
		</form>
	</div>
	
	<img src="barang/Lampu2.jpg" alt="gambar" class="bg1" height = "23px"  />
	<div class="content1">
	<form id="form1" name="form1" method="post" action="notif.php"> 
		 <a href="detil.php?cek=Lampu2"><font size="3px" face="sans" color="Brown" >Lampu 2</font></a><br>
		<font size = "3px" color = "brown" > 
		Rp 200.100.000,- </font><br>
		<tr>
			<th <width="16" height ="0"><font color ="brown" >Jumlah</font></th>
			<td width="12" align="left"><input name="Jumlah" type = "text" id ="Jumlah" size="2" /></td><br>
		</tr>
		<tr>
			<td align="left"><input type="submit" name="kirim" id="kirim" value="Beli"/></td>
		</tr>
		</form>
    </div>
	
	<img src="barang/Lampu3.jpg" alt="gambar" class="bg2" height = "23px"  />
	<div class="content2">
	<form id="form1" name="form1" method="post" action="notif.php"> 
		 <a href="detil.php?cek=Lampu3"><font size="3px" face="sans" color="Brown" >Lampu 3</font></a><br>
		<font size = "3px" color = "brown" > 
		Rp 200.100.000,- </font><br>
		<tr>
			<th <width="16" height ="0"><font color ="brown" >Jumlah</font></th>
			<td width="12" align="left"><input name="Jumlah" type = "text" id ="Jumlah" size="2" /></td><br>
		</tr>
		<tr>
			<td align="left"><input type="submit" name="kirim" id="kirim" value="Beli"/></td>
		</tr>
		</form>
    </div>
	
	<img src="barang/Lampu4.jpg" alt="gambar" class="bg3" height = "23px"  />
	<div class="content3">
	<form id="form1" name="form1" method="post" action="notif.php"> 
		 <a href="detil.php?cek=Lampu4"><font size="3px" face="sans" color="Brown" >Lampu 4</font></a><br>
		<font size = "3px" color = "brown" > 
		Rp 200.100.000,- </font><br>
		<tr>
			<th <width="16" height ="0"><font color ="brown" >Jumlah</font></th>
			<td width="12" align="left"><input name="Jumlah" type = "text" id ="Jumlah" size="2" /></td><br>
		</tr>
		<tr>
			<td align="left"><input type="submit" name="kirim" id="kirim" value="Beli"/></td>
		</tr>
		</form>
    </div>
	
	<img src="barang/Lampu5.jpg" alt="gambar" class="bg4" height = "23px"  />
	<div class="content4">
	<form id="form1" name="form1" method="post" action="notif.php"> 
		  <a href="detil.php?cek=Lampu5"><font size="3px" face="sans" color="Brown" >Lampu 5</font></a><br>
		<font size = "3px" color = "brown" > 
		Rp 200.100.000,- </font><br>
		<tr>
			<th <width="16" height ="0"><font color ="brown" >Jumlah</font></th>
			<td width="12" align="left"><input name="Jumlah" type = "text" id ="Jumlah" size="2" /></td><br>
		</tr>
		<tr>
			<td align="left"><input type="submit" name="kirim" id="kirim" value="Beli"/></td>
		</tr>
		</form>
    </div>
	
	<img src="barang/Lampu6.jpg" alt="gambar" class="bg5" height = "23px"  />
	<div class="content5">
	<form id="form1" name="form1" method="post" action="notif.php"> 
		 <a href="detil.php?cek=Lampu6"><font size="3px" face="sans" color="Brown" >Lampu 6</font></a><br>
		<font size = "3px" color = "brown" > 
		Rp 200.100.000,- </font><br>
		<tr>
			<th <width="16" height ="0"><font color ="brown" >Jumlah</font></th>
			<td width="12" align="left"><input name="Jumlah" type = "text" id ="Jumlah" size="2" /></td><br>
		</tr>
		<tr>
			<td align="left"><input type="submit" name="kirim" id="kirim" value="Beli"/></td>
		</tr>
		</form>
    </div>
	
	<img src="barang/Lampu7.jpg" alt="gambar" class="bg6" height = "23px"  />
	<div class="content6">
	<form id="form1" name="form1" method="post" action="notif.php"> 
		<a href="detil.php?cek=Lampu7"><font size="3px" face="sans" color="Brown" >Lampu 7</font></a><br>
		<font size = "3px" color = "brown" > 
		Rp 200.100.000,- </font><br>
		<tr>
			<th <width="16" height ="0"><font color ="brown" >Jumlah</font></th>
			<td width="12" align="left"><input name="Jumlah" type = "text" id ="Jumlah" size="2" /></td><br>
		</tr>
		<tr>
			<td align="left"><input type="submit" name="kirim" id="kirim" value="Beli"/></td>
		</tr>
		</form>
    </div>
	
	<img src="barang/Lampu8.jpg" alt="gambar" class="bg7" height = "23px"  />
	<div class="content7">
	<form id="form1" name="form1" method="post" action="notif.php"> 
		<a href="detil.php?cek=Lampu8"><font size="3px" face="sans" color="Brown" >Lampu 8</font></a><br>
		<font size = "3px" color = "brown" > 
		Rp 200.100.000,- </font><br>
		<tr>
			<th <width="16" height ="0"><font color ="brown" >Jumlah</font></th>
			<td width="12" align="left"><input name="Jumlah" type = "text" id ="Jumlah" size="2" /></td><br>
		</tr>
		<tr>
			<td align="left"><input type="submit" name="kirim" id="kirim" value="Beli"/></td>
		</tr>
		</form>
    </div>
	
	<img src="barang/Lampu9.jpg" alt="gambar" class="bg8" height = "23px"  />
	<div class="content8">
	<form id="form1" name="form1" method="post" action="notif.php"> 
		 <a href="detil.php?cek=Lampu9"><font size="3px" face="sans" color="Brown" >Lampu 9</font></a><br>
		<font size = "3px" color = "brown" > 
		Rp 200.100.000,- </font><br>
		<tr>
			<th <width="16" height ="0"><font color ="brown" >Jumlah</font></th>
			<td width="12" align="left"><input name="Jumlah" type = "text" id ="Jumlah" size="2" /></td><br>
		</tr>
		<tr>
			<td align="left"><input type="submit" name="kirim" id="kirim" value="Beli"/></td>
		</tr>
		</form>
    </div>
	
	<img src="barang/Lampu10.jpg" alt="gambar" class="bg9" height = "23px"  />
	<div class="content9">
	<form id="form1" name="form1" method="post" action="notif.php"> 
		 <a href="detil.php?cek=Lampu10"><font size="3px" face="sans" color="Brown" >Lampu 10</font></a><br>
		<font size = "3px" color = "brown" > 
		Rp 200.100.000,- </font><br>
		<tr>
			<th <width="16" height ="0"><font color ="brown" >Jumlah</font></th>
			<td width="12" align="left"><input name="Jumlah" type = "text" id ="Jumlah" size="2" /></td><br>
		</tr>
		<tr>
			<td align="left"><input type="submit" name="kirim" id="kirim" value="Beli"/></td>
		</tr>
		</form>
    </div>
	

</body>
</html>