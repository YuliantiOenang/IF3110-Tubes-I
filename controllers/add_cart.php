<?php
//get the q parameter from URL
$amount=$_GET["amount"];
$id=$_GET["id"];

//lookup all hints from array if length of q>0
include ("connect_database.php");

//checking if item count > 0
$result = mysqli_query($con,"SELECT * FROM inventori WHERE id_inventori = ".$q);

$data = null;
session_start();

$arr = array(' ' => array($amount, $id));

$_SESSION[];

echo $data['jumlah'];
?>