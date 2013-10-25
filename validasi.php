<?php
$data = $_GET['q'];
$type = intval($_GET['num']);
if (isset($_GET['pass'])) $pass = $_GET['pass'];
$uservalid = false;
$passvalid = false;
$copassvalid = false;
$emailvalid = false;
include "koneksi.inc.php";

switch ($type) {
	case 1://Full name validator 
		$complete = false;
		$regex = '/^([A-Za-z]{1,10})+([ ][A-Za-z]{1,20})+$/';
		if(preg_match($regex, $data)){
			echo "OK";$uservalid=true;
		}else{echo "Nama harus terdiri dari karakter(A-Z)(a-z). Minimal 2 kata.";$uservalid=false;}
	break;
	case 2://username validator
		$sql="SELECT * FROM anggota WHERE username = '".$data."'";
		$regex = '/^([A-Za-z0-9]{5,20})$/';
		$result = mysql_query($sql,$koneksi);
		$samewithpass = false;
		if($pass==$data){$samewithpass = true;}
		if(mysql_num_rows($result)!=1 && preg_match($regex, $data) && !$samewithpass)
	  		{echo "OK";$uservalid=true;}
	  	else if(mysql_num_rows($result)==1) {echo "Username sudah pernah terdaftar. coba cari yang lain.";$uservalid=false;}
		else if($samewithpass){echo "Username tidak boleh sama dengan password";$uservalid=false;}
		else {echo "Username minimal 5 karakter";$uservalid=false;}
	break;
	case 3://password validator
		$samewithpass = false;
		if($pass==$data){$samewithpass = true;}
		if(strlen($data)>7  && !$samewithpass){echo "OK";$passvalid=true;}
		else 
			{	if(strlen($data)<1) echo"";
				else if($samewithpass){echo "Password tidak boleh sama dengan username";}
				else echo "Password minimal 8 karakter";
				$passvalid = false;
			}
	break;
	case 4://copassword validator
		if($pass==$data){echo "OK";$copassvalid=true;}
		else 
			{	if(strlen($data)<1) echo"";
				else if($pass!=$data) echo "Silakan isi password awal dengan benar.";
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