<?php
$a = $_GET['Detail'];
$b = $_GET['Jumlah'];
$c = $_GET['id'];

$con=mysqli_connect("localhost","root","","users"); // blom diisi sql
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * FROM tabbarang WHERE id ='".$c."'" );

while($row = mysqli_fetch_array($result) )
{
$sql="INSERT INTO cart (id,foto,nama,harga,detail,jumlah) VALUES (".$c.",'".$row['foto']."','".$row['nama']."',".$row['harga'].",".$a.",".$b.")" ;
}

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);


?>