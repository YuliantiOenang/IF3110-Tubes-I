<html>
<?php
require_once('header.php'); ?>


<body>

<div id="divkartu">
<form  id="form2" name="formkartukredit" action="registrasikartu.php" method="GET" ">
	Card Number <input id="nomor" name="nomorkartu" type="text"  />   <br />
	Name on Card <input id="namakartu" name="namakartu" type="text"  />  <br />
	Date Expired  <input id="tanggal" name="tanggalexp" type="date" /> <br />
	<input id="tombolkartu" name="register" type="submit" value="register"   /> 
	<input id="tombolskip" name="skip" type="submit" value="skip" onclick="window.location='index.php'; return false;"   />
	
</form>
</div>


</body>
</html>

<?php
// Create connection
$con=mysql_connect("localhost","root",null) or die("cannot connect");
mysql_select_db("tubesweb")or die("cannot select DB");

if (isset($_GET['nomorkartu']) && isset($_GET['namakartu'])){

	$number=strtolower(mysql_real_escape_string($_GET['nomorkartu']));
	$nama=strtolower(mysql_real_escape_string($_GET['namakartu']));
	$username=$_SESSION['namauser'];
	

	if(preg_match('/^([_0-9-]{10})$/',$number) && preg_match('/([_a-zA-Z-]* [_a-zA-Z-]*)/',$nama)){
		$HTML='success';
		$sql="UPDATE user SET nokartukredit='$_GET[nomorkartu]' , namadikartu='$_GET[namakartu]' , dateexp='$_GET[tanggalexp]' WHERE username='$username'";
		if (!mysql_query($sql,$con)) {
			$HTML="";
			die('Error: ' . mysql_error($con));
			mysql_close($con);
		} else {
			mysql_close($con);
			echo'<script> window.location="index.php"; </script> ';
		}
	}
}


?>  