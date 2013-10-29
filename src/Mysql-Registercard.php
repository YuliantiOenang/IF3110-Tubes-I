<?php include("header.php"); ?>

<html>
	<body>
		<?php 
			include 'connect-mysql.php';

			$sql = "INSERT INTO creditcard (number,name,date,username)
					VALUES('".$_POST["number"]."' , 
					 '".$_POST["name"]."' , 
					 '".$_POST["date"]."',
					 '".$_POST["username"]."');";

			$result = mysql_query($sql);
			if (!$result) {
				die("$sql : " . mysql_error());
			}
		?>

		<a href="index.php">Kembali</a>
	</body>
</html>