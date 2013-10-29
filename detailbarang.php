<html>
<head>
<script>
function Detail(a) {
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
int x = document.getElementById("Jumlah").value;
var y = document.getElementById("det").value; 
xmlhttp.open("GET","addtocart.php?Detail="y"&Jumlah="x"&id="a,true);
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
  
$result = mysqli_query($con,"SELECT * FROM tabbarang WHERE id = ".$_GET['id'] );
while ($row = mysqli_fetch_array($result))   
{
echo'<div id="container" style="height:300px;width:600px">
	<div id="foto" style="width:300px;height:300px;float:left">
	<img src="'.$row['foto'].'" width="300" height="300">	
	</div>
	<div id="deskripsi" style="height:300px;widht:300px;float:left">
	<table border="0">
	<tr>
		<th> Nama </th>
		<td> '.$row['nama'].'</td>
	</tr>
	<tr>
		<th> Harga </th>
		<td> '.$row['harga'].'</td>
	</tr>
	<tr>
		<th> Deskripsi </th>
		<td> '.$row['deskripsi'].'</td>
	</tr>
	<tr>
		<th> Jumlah </th>
		<td> <input type="text" size="5" id="Jumlah" ></td>
	</tr>
	<tr>
		<th> Detail </th>
		<td> <textarea id="det" rows="6" cols="30"> </textarea> </td>
	</tr>
	</table>
	<input type="button" value="add to cart" onclick="Detail('.$row['id'].')">
	</div>

</div>';
}
?>
</body>
</html>