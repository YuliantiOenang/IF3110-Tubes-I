<?php
include 'core.inc.php';
include 'connect.inc.php';
echo 'Selamat Datang, '. getuserfield('nama');
header("Refresh: 2; ../home.php");
?>