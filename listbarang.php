<html>
<head>
<script>
function pesan(a,b,c) {
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	    document.getElementById("cart").innerHTML=xmlhttp.responseText;
    }
  }
var x = document.getElementById(("Jumlah").concat(a)).value;
if (c == 0)
	{
	document.getElementById("message").innerHTML="Stock Habis" ;
	}
else if (x > c)// jumlah tidak cukup
	{
	document.getElementById("message").innerHTML="Stock Kurang" ;
	}
else
	{
	document.getElementById("message").innerHTML="" ;
	xmlhttp.open("GET","addtocart.php?Detail='tidakada'&Jumlah="+x+"&id="+b,true);
	xmlhttp.send();
	}
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
  
if ($_GET["Key"] == "daging")  
	{
	$result = mysqli_query($con,"SELECT * FROM tabbarang WHERE Kategori = 'daging'");
	}
else if ($_GET["Key"] == "sayur") 
	{
	$result = mysqli_query($con,"SELECT * FROM tabbarang WHERE Kategori = 'sayur'");
	}
else if ($_GET["Key"] == "buah") 
	{
	$result = mysqli_query($con,"SELECT * FROM tabbarang WHERE Kategori = 'buah'");
	}
else if ($_GET["Key"] == "ikan") 
	{
	$result = mysqli_query($con,"SELECT * FROM tabbarang WHERE Kategori = 'ikan'");
	}
else if ($_GET["Key"] == "bumbu") 
	{
	$result = mysqli_query($con,"SELECT * FROM tabbarang WHERE Kategori = 'bumbu'");
	}
		
echo'<div id="container" style="width:1000px">';

$i=0;

while ($row = mysqli_fetch_array($result))   
{
if ( ($i < (10 * ($_GET["Page"] + 1) )   ) && ($i >= (10*$_GET["Page"]) ) )
	{
	echo'<div id="Barang'.$i.'" style="width:180px;height:350px;float:left">
		<div id="foto'.$i.'" style="width:180px;height:180px;float:left">
		<img src="'.$row['foto'].'" width="180" height="180">
		</div>';
		echo'
		<table border="0">
		<tr>
			<th> Nama </th>
			<td> '.$row['nama'].'</td>
		</tr>';	
		echo'
		<tr>
			<th> Harga </th>
			<td> '.$row['harga'].'</td>
		</tr>';
		echo'
		<tr>
			<th> Jumlah </th>
			<td> <input type="text" id="Jumlah'.$i.'" name="Jumlah'.$i.'" size="4"> <p style="color:red" id="message"> </p> </td>
		</tr>
		</table>
		<button type="button" onclick="pesan('.$i.','.$row["id"].','.$row["jumlah"].')">Add to cart</button>
		<div id="cart"></div>
		</div>';
	}
	$i++;
}
echo'<div id="container2" style="position:fixed;margin-top:700px">';
$n = ceil($i/10);
$j=0;
echo "page ";
while ($j < $n)
{
echo"<a href='listbarang.php?Key=".$_GET['Key']."&Page=".$j."'>".$j."</a>";
$j++;
}	
echo"</div>";
echo"</div>";

mysqli_close($con);

?>

</body>
</html>
