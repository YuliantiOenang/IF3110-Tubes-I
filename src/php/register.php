<?php
	require 'core.inc.php';
	require 'connect.inc.php';
	if(!loggedin()){  
		if(isset($_POST['nama'])&&
		isset($_POST['username'])&&
		isset($_POST['password1'])&&
		isset($_POST['password2'])&&
		isset($_POST['alamat'])&&
		isset($_POST['email'])&&
		isset($_POST['kecamatan'])&&
		isset($_POST['kodepost'])&&
		isset($_POST['provinsi'])){
				$nama = $_POST['nama'];
				$username = $_POST['username'];
				$password1 = $_POST['password1'];
				$password2 = $_POST['password2'];
				$alamat = $_POST['alamat'];
				$email = $_POST['email'];
				$kecamatan = $_POST['kecamatan'];
				$kodepost = $_POST['kodepost'];
				$provinsi = $_POST['provinsi'];
				
				if(!empty($nama) && !empty($username) && !empty($password1) && !empty($password2) && !empty($alamat) && !empty($email) && !empty($kecamatan) && !empty($kodepost) && !empty($provinsi)){
					if($password1!=$password2){
						echo 'Password do not match';
					}
					else
					{
						$query = "SELECT `username` FROM `user` WHERE `username`='$username'";
						$query_run = mysql_query($query);
						
						if(mysql_num_rows($query_run) == 1){
							echo 'The username '. $username. ' already exist.';
						}
						else
						{
							$query = "INSERT INTO `user` VALUES ('','".mysql_real_escape_string($nama)."','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password1)."','".mysql_real_escape_string($alamat)."','".mysql_real_escape_string($provinsi)."','".mysql_real_escape_string($kecamatan)."','".mysql_real_escape_string($kodepost)."','".mysql_real_escape_string($email)."')";
							if($query_run = mysql_query($query)){
								$query2 = "SELECT `id` FROM `user` WHERE `username`='$username'";
								if($query_run2 = mysql_query($query2)){
									$user_id = mysql_result($query_run2,0,'id');
									$_SESSION['user_id']=$user_id;
									header('Location:register_success.php');
								}
							}
							else{
								echo 'Sorry, we couldn\'t register you. Please try again';
							}
						}
					}
				}
				else{
					echo 'All fields  are required';
				}
		}
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrasi</title>
<link rel="stylesheet" type="text/css" href="style/style1.css" />
</head>

<body>
<div id="Home"><a href="home.php"><img src="../image/RoSerBa Logo.PNG" alt="logo" width="74" height="66" align="left" /></a></div>
<div id="Banner" align="center"><img src="../image/ruserba.png" width="279" height="69" /></div>
<div id="FormRegistrasi"><form action="register.php" method="POST">
	<p> Nama Lengkap:</p>
	<p>
	<input type="text" name="nama" />
	<br>
    </p>
	<p> Username:</p>
	<p>
	  <input type ="text" name ="username" min="5" />
	  <br>
    </p>
	<p> E-mail: </p>
	<p>
	  <input type="email" name ="email" />
	  <br>
    </p>
	<p> Password: </p>
	<p>
	  <input type="password" name="password1" min="8"/>
	  <br>
    </p>
	<p> Ulangi Password:   	</p>
	<p>
	  <input type="password" name="password2" />
	  <br>
    </p>
	<p> Alamat: </p>
	<p>
	  <input type="text" name="alamat" maxlength="50" />
	  <br>
    </p>
	<p> Provinsi: </p>
	<p>
	  <select name="provinsi">
	    <option value="Aceh"> Aceh </option>
	    <option value="Sumatera Utara"> Sumatera Utara </option>
	    <option value="Sumatera Barat"> Sumatera Barat </option>
	    <option value="Riau"> Riau </option>
	    <option value="Kepulauan Riau"> Kepulauan Riau </option>
	    <option value="Jambi"> Jambi </option>
	    <option value="Bengkulu"> Bengkulu </option>
	    <option value="Bangka Belitung"> Bangka Belitung </option>
	    <option value="Sumatera Selatan"> Sumatera Selatan </option>
	    <option value="Lampung"> Lampung </option>
	    <option value="Banten"> Banten </option>
	    <option value="DKI Jakarta"> DKI Jakarta </option>
	    <option value="Jawa Barat"> Jawa Barat </option>
	    <option value="Jawa Tengah"> Jawa Tengah </option>
	    <option value="DI Yogyakarta"> DI Yogyakarta </option>
	    <option value="Jawa Timur"> Jawa Timur </option>
	    <option value="Bali"> Bali </option>
	    <option value="Nusa Tenggara Barat"> Nusa Tenggara Barat </option>
	    <option value="Nusa Tenggara Timur"> Nusa Tenggara Timur </option>
	    <option value="Kalimantan Barat"> Kalimantan Barat </option>
	    <option value="Kalimantan Utara"> Kalimantan Utara </option>
	    <option value="Kalimantan Tengah"> Kalimantan Tengah </option>
	    <option value="Kalimantan Selatan"> Kalimantan Selatan </option>
	    <option value="Kalimantan Timur"> Kalimantan Timur </option>
	    <option value="Sulawesi Utara"> Sulawesi Utara </option>
	    <option value="Gorontalo"> Gorontalo </option>
	    <option value="Sulawesi Tengah"> Sulawesi Tengah </option>
	    <option value="Sulawesi Tenggara"> Sulawesi Tenggara </option>
	    <option value="Sulawesi Barat"> Sulawesi Barat </option>
	    <option value="Sulawesi Selatan"> Sulawesi Selatan </option>
	    <option value="Maluku Utara"> Maluku Utara</option>
	    <option value="Maluku"> Maluku </option>
	    <option value="Papua Barat"> Papua Barat </option>
	    <option value="Papua"> Papua </option></select><br>
    </p>
	<p>
    	Kabupaten/Kota :    </p>
	<p>
	  <input type="text" name="kecamatan"  />
	  <br>
    </p>
<p>
    	Kode Pos :   </p>
<p>
  <input type="text" name="kodepost"  />
  <br>       
  <input type="submit" name="daftar" value="Daftar" />
</p>
</form>

<?php
		}else {
		//echo 'You\'re already registered and logged in.';
	}
?>

