<?php
//get the q parameter from URL
$q=$_GET["q"];

//lookup all hints from array if length of q>0
include ("connect_database.php");

//checking if item count > 0
$result = mysqli_query($con,"SELECT * FROM inventori WHERE id_inventori = ".$q);

$data = null;
while($row = mysqli_fetch_array($result)){
	$data = $row;
	break;
}

echo $data['jumlah'];
?>