<html>
<?php
require_once('header.php'); ?>



<body>

<script type="text/javascript" src="checking.js"></script>
<div id="divreg">
<form id="form1" name="formregistrasi"  action="registrasi.php" method="get" tag="registrasi">
		   Username <input id="username" type="username" name="username" onkeyup="userHint(this.value,password.value)" /> &nbsp;&nbsp;&nbsp; <span id="userHint" ></span>  <br />
		   Password <input id="password" type="password" name="password" onkeyup="passHint(this.value,username.value)" /> &nbsp;&nbsp;&nbsp; <span id="passHint" ></span> <br />
		   Confirm Password   <input id="confirm" type="password" name="cnfrm" onkeyup="cpassHint(this.value,password.value)" /> &nbsp;&nbsp;&nbsp; <span id="cpassHint" ></span> <br />
		   Nama Lengkap       <input id="nama1" type="text" name="namalengkap" onkeyup="namaHint(this.value)" /> &nbsp;&nbsp;&nbsp; <span id="namaHint" > </span> <br />
		   Email              <input id="email" type="email" name="email" onkeyup="emailHint(this.value,password.value)" />&nbsp;&nbsp;&nbsp; <span id="txtHint" ></span> <br />
		   Nomor HP           <input id="hp" type="text" name="hp"/><br />
		   Alamat			  <input id="alamat" type="text" name="almt"/><br />
		   Kabupaten          <input id="kab" type="text" name="kab"/><br />
		   Provinsi           <input id="prov" type="text" name="prov"/> <br/>
		   Kode Pos           <input id="kode" type="text" name="kode" /><br />
	<input id="tombolreg" name="tombol" type="submit" value="register"   />	
</form>
</div>


</body>
</html>

<?php
// Create GET
$con=mysql_connect("localhost","root",null) or die("cannot connect");
mysql_select_db("tubesweb")or die("cannot select DB");


if(isset($_GET['username']) && !empty($_GET['username']) && isset($_GET['email']) && !empty($_GET['email'])){

	//username
    $username=strtolower(mysql_real_escape_string($_GET['username']));
    $query="select * from user where username='$username'";
    $res=mysql_query($query, $con) or die ('Unable to run query:'.mysql_error());
    $count=mysql_num_rows($res);
	$nama=$_GET['username'];
	
	//email
	$email=strtolower(mysql_real_escape_string($_GET['email']));
    $query1="select * from user where email='$email'";
    $res1=mysql_query($query1, $con) or die ('Unable to run query:'.mysql_error());
    $count1=mysql_num_rows($res1);
	
    $HTML='';
	$success=false;
    if($count > 0 ){
		$HTML='username sudah digunakan';
    } else if($count1 > 0 ){
		$HTML='alamat email sudah digunakan';
    } else{
		$sql="INSERT INTO `user`(`username`, 
		`email`,
		`fullname`, 
		`password`, 
		`alamat`, 
		`kabupaten`, 
		`provinsi`, 
		`kodepos`, 
		`telepon`) 
		VALUES
		('$_GET[username]',
		'$_GET[email]',
		'$_GET[namalengkap]',
		'$_GET[password]',
		'$_GET[almt]',
		'$_GET[kab]',
		'$_GET[prov]',
		'$_GET[kode]',
		'$_GET[hp]')";
		$success=true;
		if (!mysql_query($sql,$con) || $success==false) {
			die('Error: ' . mysql_error($con));
			mysql_close($con);
			echo'<script type="text/javascript">
				alert("Thank You! your order has been placed!i");	
			 </script>';
		} else {
			$_SESSION['namauser']=$nama;
			mysql_close($con);
			echo'<script> window.location="registrasikartu.php"; </script> ';
			}
	}
	if ($success==false) {
		mysql_close($con);
		echo'<script type="text/javascript">
				alert("Thank You! your order has been placed!i");	
			 </script>';
	}
}


?>  