

<!DOCTYPE html>
<html>
<?php

include 'db.php';
include 'macro/header.php';

?>

<body>
	
	<form method="post" action="edit.php" onsubmit="return (isChanged(name.value, telephone.value, address.value, city.value, province.value, postal.value) && validateEdit())" name="regform">
		<?php
		if (isset($_SESSION['user_id'])) {
			if ($result = mysqli_query($link, "SELECT * FROM user WHERE id='".$_SESSION['user_id']."'")) {
				$row = mysqli_fetch_array($result);
				echo "<script type=\"text/javascript\">";
				echo "function isChanged(nama, tel, add, cit, prov, posta) {
						if (nama == '".$row['nama']."' && tel == '".$row['hp']."' && add == '".$row['alamat']."' && cit == '".$row['kota']."' && prov == '".$row['provinsi']."' && posta == '".$row['kodepos']."') {
							var r = confirm(\"Tidak ada perubahan dilakukan, lanjutkan?\");
							return r;
						}
						return true;
					}";
				echo "</script>";
				echo "<input id=\"name\" value=\"".$row['nama']."\" name=\"name\" placeholder=\"nama lengkap\" type=\"text\" onkeypress=\"if(this.value != '') validateName(this.value, 'fullname');\"/><div id=\"fullname\"></div><br />";			
				echo "<input id=\"telephone\" value=\"".$row['hp']."\" name=\"telephone\" placeholder=\"telepon\" type=\"tel\" onkeypress=\"validateEmpty(this.value, 'valtelephone')\" /><div id=\"valtelephone\"></div><br />";
				echo "<textarea id=\"address\" name=\"address\" onkeypress=\"validateEmpty(this.value, 'valaddress')\">".$row['alamat']."</textarea><div id=\"valaddress\"></div><br />";
				echo "<input id=\"city\" value=\"".$row['kota']."\" name=\"city\" placeholder=\"kota\" type=\"text\" onkeypress=\"validateEmpty(this.value, 'valcity')\"/><div id=\"valcity\"></div><br />";
				echo "<input id=\"province\" value=\"".$row['provinsi']."\" name=\"province\" placeholder=\"provinsi\" type=\"text\" onkeypress=\"validateEmpty(this.value, 'valprovince')\"/><div id=\"valprovince\"></div><br />";
				echo "<input id=\"postal\" value=\"".$row['kodepos']."\" name=\"postal\" placeholder=\"kode pos\" type=\"number\" onkeypress=\"validateEmpty(this.value, 'valpostal')\"/><div id=\"valpostal\"></div><br />";
			}			
		}
		?>
		<input type="submit" /><br />
	</form>
</body>

</html>

