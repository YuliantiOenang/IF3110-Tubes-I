<?php
  include "config/connect.php";

			
			$mysql=mysql_query("INSERT INTO `keranjang`(`id_customer`, `id_alat`, `jumlah`,`pesan`) VALUES ('".$_COOKIE['IdCustomer']."','".$_GET['id']."','".$_GET['jumlah']."','".$_GET['permintaan']."')")  or die(mysql_error());
			if($mysql)
			{
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

