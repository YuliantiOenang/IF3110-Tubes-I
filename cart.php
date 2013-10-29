<html>
<head>
<script>
function pesan(a,b) {
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
int x = document.getElementById(("Jumlah").concat(a)).value;
xmlhttp.open("GET","addtocart.php?Detail=--&Jumlah="x"&id="b,true);
xmlhttp.send();
}
</script>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","","users"); // blom diisi sql
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
	$result = mysqli_query($con,"SELECT * FROM cart");
		
echo'<div id="container" style="width:1000px">';

$i=0;

while(($row = mysqli_fetch_array($result)) && ($i < (10 * ($_GET["Page"] + 1) )   ) && ($i >= (10*$_GET["Page"]) ) )
{
	echo'<div id="Barang'.$i.'" style="width:200px;height:350px;float:left">
		<div id="foto'.$i.'" style="width:200px;height:200px;float:left">
		<img src="'.$row['foto'].'" width="200" height="200">
		</div>
		<div id="ID'.$i.'" style="width:200px;height:50px;float:left">';
		echo"ID: ".$row['ID'];
		echo'</div>
		<div id="nama'.$i.'" style="width:200px;height:50px;float:left">';
		echo"Nama: ".$row['nama'];
		echo'</div>
		<div id="harga'.$i.'" style="width:200px;height:50px;float:left">';
		echo"Harga: ".$row['harga'];
		echo'</div>
		<div id="jumlah'.$i.'" style="width:200px;height:50px;float:left">';
		echo"Jumlah: ".$row['jumlah'];
		echo'</div>
		<div id="detail'.$i.'" style="width:200px;height:50px;float:left">';
		echo"Detail: ".$row['detail'];
		echo'</div>
	</div>';
	$i++;
}
echo"</div>";

echo'<div id="container2" style="width:1000px">';
$n = ceil($s/10);
$j=0;
while ($j < $n)
{
echo"<a href='listbarang.php?Key=".$_GET['Key']."&Page=".$j."'>".$j."</a>";
$j++;
}	
echo"</div>";
?>

</body>
</html>
