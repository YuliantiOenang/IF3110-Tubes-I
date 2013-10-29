<?php
session_start();
$pageTitle = "Profil";
$section = "profil";

if((!isset($_SESSION['username'])) && (!isset($_COOKIE['sinarjaya']))){

	header("Location:register.php");
	exit();

}else{

	if(!isset($_SESSION['username'])&&isset($_COOKIE['sinarjaya'])){
		$_SESSION['username'] = $_COOKIE['sinarjaya'];
	}
		
	if($_SESSION['username']){
		$username = $_SESSION['username'];
	
		mysql_connect("localhost", "root", "") or die("problem with connection...");
		mysql_select_db("ruserba");

		$query = mysql_query("SELECT * FROM `user` WHERE username='".$username."'");
		$numrows = mysql_num_rows($query);

		if($numrows != 0){
			while($row = mysql_fetch_assoc($query)){
				$nama = $row['nama'];
				$nohp = $row['nohp'];
				$alamat = $row['alamat'];
				$provinsi = $row['provinsi'];
				$kota = $row['kota'];
				$kodepos = $row['kodepos'];
				$email = $row['email'];
			}
	
		}

	}
	
}

include('header.php'); ?>

<div class="section page">
			<div class="wrapper">
				<h1>Profil</h1>
				<h2>Username : </h2>
				<?php echo $username; ?>
				<h2>Nama : </h2>
				<?php echo $nama; ?>
				<h2>No HP : </h2><?php echo $nohp; ?>
				<h2>Alamat : </h2><?php echo $alamat; ?>
				<h2>Provinsi : </h2><?php echo $provinsi; ?>
				<h2>Kota : </h2><?php echo $kota; ?>
				<h2>Kodepos : </h2><?php echo $kodepos; ?>
				<h2>Email : </h2><?php echo $email; ?>
			</div>
		</div>

<?php
include('footer.php');
?>