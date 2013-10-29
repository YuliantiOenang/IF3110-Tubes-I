<?php include 'header.php'; ?>
		<script>
			if (localStorage.user==null) {
				window.location = "register.php";
			}
			function AJAXcard() {
				var username=localStorage.user;
				var cardno=document.forms["card"]["cardno"].value;
				var nameoncard=document.forms["card"]["nameoncard"].value;
				var expdate=document.forms["card"]["expdate"].value;
				var xmlhttp;
				if (window.XMLHttpRequest)
					{// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				}
				else
					{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.open("POST","AJAXcard.php",false);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("username="+username+"&cardno="+cardno+"&nameoncard="+nameoncard+"&expdate="+expdate);
				if (xmlhttp.responseText=="true") {
					alert("Registrasi kartu kredit berhasil");
					window.location="index.php";
				}
				else {
					alert("Card no / Name on card sudah pernah digunakan");
				}
			}
		</script>
	</head>
<?php include 'middle.php'; ?>
		<h2>Registrasi Kartu Kredit</h2>
		<form name="card">
			Card no: <input type="text" name="cardno"><br>
			Name on card: <input type="text" name="nameoncard"><br>
			Expire date: <input type="text" name="expdate"><br>
			<button id="submit" type="button" onclick="AJAXcard()">OK</button>
			<a href="index.php"><button type="button">Skip</button></a>
		</form>
	</body>
</html>