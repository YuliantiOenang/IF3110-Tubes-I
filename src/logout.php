<!DOCTYPE html>
<html>
<head>
	<script src="login.js"></script>
</head>
<body onload="setTimeout(window.location='home.php',1500)">
	<?php
		setcookie("user","",time()-3600);
		echo "DONE";
	?>
</body>
</html>