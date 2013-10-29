<?php
require_once('header.php'); ?>

<?php 
	
	$con=mysql_connect("localhost","root",null) or die("cannot connect");
	mysql_select_db("tubesweb")or die("cannot select DB") ;
	
	$username=$_SESSION['username'];
	
	$result = mysql_query("SELECT * FROM user where username like '$username' ",$con) or die("cannot select DB1");
	$row = mysql_fetch_array($result);
	
?>

<html>

<body>

<script type="text/javascript" src="checking.js"></script>

<div id="divpetunjuk2">
<form id="formpetunjuk2" name="formregistrasi"  method="get" tag="registrasi">
		   Username &nbsp; :<br /> <?php echo $username ?> <br /> <br />
		   Nama Lengkap   &nbsp; :<br /> <?php echo $row['fullname'] ?>    <br /> <br />
		   Email         &nbsp; :<br /> <?php echo $row['email'] ?>        <br /> <br />
		   Nomor HP     &nbsp;  :<br /><?php echo $row['telepon'] ?>       <br /> <br />
		   Alamat	&nbsp; : <br /><?php echo $row['alamat'] ?>   	<br /> <br />
		   Kabupaten    &nbsp; :<br /> <?php echo $row['kabupaten'] ?>         <br /> <br />
		   Provinsi    &nbsp; :<br /> <?php echo $row['provinsi'] ?>         <br/> <br />
		   Kode Pos    &nbsp; :<br /> <?php echo $row['kodepos'] ?>        <br /> <br />
		   Jumlah Transaksi &nbsp; : <br /> <?php echo get_jum_transaksi($row['username']); ?>        <br /> <br />

</form>
</div>


</body>
</html>