<?php include("header.php"); ?>

<html>
	<body>
		<?php 
			include 'connect-mysql.php';

			 $sql = "UPDATE user SET password='$_POST[password]',
			    		nama='$_POST[nama]',
			    		hp='$_POST[hp]',
			    		alamat='$_POST[alamat]',
			    		provinsi='$_POST[provinsi]',
			    		kota='$_POST[kota]',
			    		kodepos='$_POST[kodepos]'
			    	 WHERE username='$_POST[username]'";

			    $result = mysql_query($sql);
				if (!$result) {
					die("Error : " . mysql_error());
				}
				echo "Edit Profile Saved";
		?>
		<br>
		<a href="profile.php">Kembali</a>
	</body>
</html>