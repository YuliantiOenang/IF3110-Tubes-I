<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
	require 'core.inc.php';
	require 'connect.inc.php'; 
	if(isset($_POST['nama'])&&
	isset($_POST['alamat'])&&
	isset($_POST['email'])&&
	isset($_POST['kabupaten'])&&
	isset($_POST['kodepost'])&&
	isset($_POST['provinsi'])){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$kabupaten = $_POST['kabupaten'];
		$kodepost = $_POST['kodepost'];
		$provinsi = $_POST['provinsi'];		
		if(!empty($nama)){
			$query = "UPDATE `user` SET `nama`= '".$nama."' WHERE `id` = '".$_SESSION['user_id']."'";
			if($query_run = mysql_query($query)){}
		}
		if(!empty($email)){
			$query2 = "UPDATE `user` SET `email`= '".$email."' WHERE `id` = '".$_SESSION['user_id']."'";
			if($query_run = mysql_query($query2)){}
		}
		if(!empty($alamat)){
			$query3 = "UPDATE `user` SET `alamat`= '".$alamat."' WHERE `id` = '".$_SESSION['user_id']."'";
			if($query_run = mysql_query($query3)){}
		}
		if(!empty($provinsi)){
			$query4 = "UPDATE `user` SET `provinsi`= '".$provinsi."' WHERE `id` = '".$_SESSION['user_id']."'";
			if($query_run = mysql_query($query4)){}
		}
		if(!empty($kabupaten)){
			$query5 = "UPDATE `user` SET `kabupaten`= '".$kabupaten."' WHERE `id` = '".$_SESSION['user_id']."'";
			if($query_run = mysql_query($query5)){}
		}
		if(!empty($kodepost)){
			$query6 = "UPDATE `user` SET `kodepost`= '".$kodepost."' WHERE `id` = '".$_SESSION['user_id']."'";
			if($query_run = mysql_query($query6)){}
		}
		
		header('Location: success_edit.php');
		
		
	}
?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Profil</title>
<link rel="stylesheet" type="text/css" href="../style/style1.css">
</head>

<body>
<div id="Home"><a href="../home.php"><img src="../image/RoSerBa Logo.PNG" alt="logo" width="74" height="66" align="left" /></a></div>
<div id="Banner" align="center"><img src="../image/ruserba.png" width="279" height="69" /></div>

<div id="EditProfil">
  <form action="editprofile.php" method="POST">
    <p> Nama Lengkap: </p>
    <p>
      <input type="text" name="nama" value="<?php echo getuserfield('nama');?>"/>
      <br />
    </p>
    <p> E-mail: </p>
    <p>
      <input type="email" name ="email" value="<?php echo getuserfield('email');?>" />
      <br />
    </p>
    <p> Alamat: </p>
    <p>
      <input type="text" name="alamat" maxlength="50" value="<?php echo getuserfield('alamat');?>"/>
      <br />
    </p>
    <p> Provinsi: </p>
    <p>
      <select name="provinsi">
		<option value="<?php echo getuserfield('provinsi');?>"> <?php echo getuserfield('provinsi');?> </option>
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
        <option value="Papua"> Papua </option>
      </select>
      <br />
    </p>
    <p> Kabupaten/Kota </p>
    <p>
      <input type="text" name="kabupaten" value="<?php echo getuserfield('kabupaten');?>" />
      <br />
    </p>
    <p> Kode Pos </p>
    <p>
      <input type="text" name="kodepost" value="<?php echo getuserfield('kode_pos');?>"  />
    </p>
    <p><br />
      <input type="submit" name="Edit" value="Edit" />
    </p>
  </form>
  <p>&nbsp;</p>
</div>
</body>
</html>