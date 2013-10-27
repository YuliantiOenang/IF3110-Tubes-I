<?php
  include "config/connect.php";

        $mysql=mysql_query("INSERT INTO `alat_pesta`.`customer` (`no_customer`, `nama`, `kota`, `kodepos`, `email`, `hp`, `password`, `username`, `provinsi`, `alamat`) VALUES (NULL, '".$_POST['nama_lengkap']."', '".$_POST['kobupaten']."', '".$_POST['kodepos']."', '".$_POST['email']."', '".$_POST['handphone']."', '".$_POST['password']."', '".$_POST['username']."', '".$_POST['provinsi']."','".$_POST['alamat']."')")  or die(mysql_error());
        if($mysql)
		{
			$hasil = mysql_query("SELECT no_customer FROM customer WHERE email = '".$_POST['email']."' and password= '".$_POST['password']."'");
			while($baris=mysql_fetch_row($hasil))
			{
				$getID=$baris[0];
			}
		
		setcookie("user1", $_POST['nama_lengkap'], time()+3600);
		setcookie("kobupaten", $_POST['kobupaten'], time()+3600);
		setcookie("IdCustomer", $getID, time()+3600*24*30);
		setcookie("kodepos",  $_POST['kodepos'], time()+3600*24*30);
		setcookie("email",  $_POST['email'], time()+3600*24*30);
		setcookie("handphone",  $_POST['handphone'], time()+3600*24*30);
		setcookie("username",  $_POST['username'], time()+3600*24*30);
		setcookie("provinsi",  $_POST['provinsi'], time()+3600*24*30);
		setcookie("alamat",  $_POST['alamat'], time()+3600*24*30);
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

