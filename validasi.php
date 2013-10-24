<?php
$data = $_GET['q'];
$type = intval($_GET['num']);
$pass = $_GET['pass'];
$uservalid = false;
$passvalid = false;
$copassvalid = false;
$emailvalid = false;
include "koneksi.inc.php";

switch ($type) {
	case 1://Full name validator 
		$sql="SELECT * FROM anggota WHERE nama = '".$data."'";
		$regex = '/^[A-Za-z]{6,10}+(. [A-Za-z]{2,20})+$/';
		$result = mysql_query($sql,$koneksi);
		echo preg_match($regex, $data);
		if(mysql_num_rows($result)!=1 && preg_match($regex, $data))
	  		{echo "OK";$uservalid=true;}
		else if(!preg_match($regex, $data)){echo "Nama harus terdiri dari karakter(A-Z)(a-z). Minimal 2 kata.";$uservalid=false;}
		else if(mysql_num_rows($result)==1){echo "Nama sudah terdaftar. Silakan coba yang lain";$uservalid=false;}
	break;
	case 2://username validator
		$sql="SELECT * FROM anggota WHERE username = '".$data."'";
		$regex = '/^([A-Za-z0-9]{5,20})$/';
		$result = mysql_query($sql,$koneksi);
		$row = mysql_fetch_array($result);
		$samewithpass = false;
		if($pass==$data){$samewithpass = true;}
		if(mysql_num_rows($result)!=1 && preg_match($regex, $data) && !$samewithpass)
	  		{echo "OK";$uservalid=true;}
	  	else if(mysql_num_rows($result)==1) {echo "Username sudah pernah terdaftar. coba cari yang lain.";$uservalid=false;}
		else if($samewithpass){echo "Username tidak boleh sama dengan password";$uservalid=false;}
		else {echo "Username minimal 5 karakter";$uservalid=false;}
	break;
	case 3://password validator
		if(strlen($data)>8){echo "OK";$passvalid=true;}
		else 
			{	if(strlen($data)<1) echo"";
				else echo "Password minimal 8 karakter";
				$passvalid = false;
			}
	break;
	case 4://copassword validator
		if($pass==$data && $passvalid){echo "OK";$copassvalid=true;}
		else 
			{	if(strlen($data)<1) echo"";
				else if(!$passvalid) echo "Silakan isi password awal dengan benar.";
				else echo "Confirm Password harus sama dengan Password di atas.";
				$copassvalid = false;
			}
	break;
	case 5://email validator
		$regex = '/^[a-z0-9]+([\._-][a-z0-9]+)*@[a-z0-9]+([\.-][a-z0-9]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($regex, $data)) {
			echo $data . " is a valid email. We can accept it.";
		} else { 
		 	echo $data . " is an invalid email. Please try again.";
		}
	break;
	default:
		# code...
		break;
}
?>