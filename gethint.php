<?php
//get the q parameter from URL
$q=$_GET["q"];
$jenis=$_GET["jenis"];

function valUserName($q) {
	if (strlen($q)<5) {
		$response="username minimal 5 karakter";
	}
	else {
		$response="username valid";
	}
	
	for ($i=0; $i<strlen($q); $i++) {
		if ($q[$i]==' ') {
			$response="username tidak boleh mengandung spasi";
			break;
		}
	}
		
	echo $response;
}

function valEmail($q) {
	$atpos=strpos($q,"@");
	$dotpos=strpos($q,".");

	if ($atpos<1 || $dotpos<$atpos+2 || $dotpos+2>=strlen($q)) {
		$response="email tidak valid";
	}
	else {
		$response="email valid";
	}
	echo $response;
}

function valPass($q,$user,$email) {
	if (strlen($q)<8) {
		$response="password minimal 8 karakter";
	}
	else {
		if (strcmp($q,$user)==0) {
			$response="password tidak boleh sama dengan username";
		}
		else if (strcmp($q,$email)==0) {
			$response="password tidak boleh sama dengan email";
		}
		else {
			$response="password valid";
		}
	}
	
	echo $response;
}

function ValCP($q,$cp) {
	if(strlen($q)<8) {
		$response="password minimal 8 karakter";
	}
	else if (strcmp($q,$cp)==0) {
		$response="password sama";
	}
	else {
		$response="password tidak sama";
	}
	
	echo $response;
}

function valNL($q) {
	$i=0;
	$j=0;
	$k=0;
	$valid=0;
	
	if (strlen($q)<3) {
		$response="Nama lengkap tidak valid";
	}
	else {
		for ($i=0; $i<strlen($q); $i++) {
			if ($q[$i]!=' ') {
				break;
			}
		}
		
			for ($j=$i; $j<strlen($q); $j++) {
				if ($q[$j]==' ') {
					break;
				}
			}
			for ($k=$j; $k<strlen($q); $k++) {
				if ($q[$k]!=' ') {
					$valid=1;
					$response="Nama lengkap valid";
					break;
				}
			}
		
	}
	if ($valid==0) {
		$response="Nama lengkap tidak valid";
	}
	
	echo $response;
}

function valReg($user,$pwd,$cpwd,$nama,$email,$alamat,$kotakab,$kodepos,$prov,$nohp) {
	$con = mysqli_connect("localhost","root","","users");

	// check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL : " . mysqli_connect_error();
		
	}
	
	$n= mysqli_query($con,"SELECT COUNT(*) FROM member");
	$numrow=$n->fetch_row();

	$sql="INSERT INTO member (id, username, nama, alamat, kotakab, provinsi, kodepos, email, hp, password) VALUES
		('$numrow[0]'+1,'$user','$nama','$alamat','$kotakab','$prov','$kodepos','$email','$nohp','$pwd')";

	if (!mysqli_query($con,$sql))
	  {
	  die('Error: ' . mysqli_error($con));
	  }
	  else {
		echo "Anda berhasil melakukan registrasi";
		
		}

	mysqli_close($con);

}

function valLogin($user,$pwd) {
	$con = mysqli_connect("localhost","root","","users");

	// check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL : " . mysqli_connect_error();
		
	}
	
	$result=mysqli_query($con, "SELECT * FROM member WHERE username='$user'");
	
	if ($result==null) {
		echo "username tidak ada";
	}
	while ($row=mysqli_fetch_array($result) ) {
		if ($row['password']==$pwd) {
			echo "selamat datang";
		}
		else {
			echo "password salah";
		}
	}
	
	mysqli_close($con);

}


if ($jenis=="nama") {
	valUserName($q);
}
else if ($jenis=="email") {
	valEmail($q);
}
else if ($jenis=="pass") {
	$user=$_GET["user"];
	$email=$_GET["email"];
	valPass($q,$user,$email);
}
else if ($jenis=="cpass") {
	$cp=$_GET["cp"];
	valCP($q,$cp);
}
else if ($jenis=="nl") {
	valNL($q);
}
else if($jenis=="reg") {
	$user=$_GET["user"];
	$pwd=$_GET["pwd"];
	$cpwd=$_GET["cpwd"];
	$nama=$_GET["nama"];
	$email=$_GET["email"];
	$alamat=$_GET["alamat"];
	$kotakab=$_GET["kotakab"];
	$kodepos=$_GET["kodepos"];
	$prov=$_GET["prov"];
	$nohp=$_GET["nohp"];
	valReg($user,$pwd,$cpwd,$nama,$email,$alamat,$kotakab,$kodepos,$prov,$nohp);
}
else if($jenis=="login") {
	$user=$_GET["user"];
	$pwd=$_GET["pwd"];
	valLogin($user,$pwd);
}

?>

