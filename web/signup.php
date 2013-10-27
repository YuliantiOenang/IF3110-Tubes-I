<?php
  include "config/connect.php";

        $mysql=mysql_query("INSERT INTO `alat_pesta`.`customer` (`no_customer`, `nama`, `kota`, `kodepos`, `email`, `hp`, `password`, `username`, `provinsi`, `alamat`) VALUES (NULL, '".$_POST['nama_lengkap']."', '".$_POST['kobupaten']."', ".$_POST['kodepos'].", '".$_POST['email']."', ".$_POST['handphone'].", '".$_POST['password']."', '".$_POST['username']."', '".$_POST['provinsi']."','".$_POST['alamat']."')")  or die(mysql_error());
        if($mysql)
		{
		setcookie("user1", $_POST['nama_lengkap'], time()+3600);
		setcookie("kota", $_POST['kobupaten'], time()+3600);
		?>
			<script type="text/javascript">
						window.alert("Berhasil Register");
						window.location="index.php";
						</script>
		<?php
		}
		else
		{
		?>
			<script type="text/javascript">
						window.alert("Gagal Register");
						window.location="index.php";
			</script>
		<?php
		
		}
         
     
?>

