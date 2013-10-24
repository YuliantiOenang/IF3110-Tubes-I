<!DOCTYPE HTML>
<html>
<head><title>Selamat Datang di Ruserba</title></head>
<body>
	<?php include "header.php"; ?>
	<hr><p>Ruserba adalah website yang menjual barang-barang kebutuhan sehari-hari secara online.</p>
</body>
<script>
	if(localStorage.wbduser){
		var head =  "<p>Selamat datang, <b>"+localStorage.wbduser+"</b> ^^</p>";
		head += "<form method=\"post\" action=\"index.php?logout=true\"><input type=\"submit\" value=\"Logout\"></form>";
		document.getElementById("header").innerHTML = head;
	}
</script>
</html>