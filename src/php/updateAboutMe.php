<?php
require('init_function.php');

$con = getConnection();

$aboutme = $_GET['aboutme'];
$userid = $_GET['userid'];

$query = "UPDATE user SET aboutme = '$aboutme' WHERE username='$userid'";
mysqli_query($con,$query);

echo $aboutme;

?>