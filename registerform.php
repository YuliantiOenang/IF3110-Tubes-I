<!DOCTYPE HTML>
<html>
<head><title>Pendaftaran Anggota Baru Ruserba</title>
	<script>
		function validate(text,num,pas)
		{
		var xmlhttp;
		var temp = ""+text;
		if (temp.length==0)
		  { 
		  	if(num==1)
		  		document.getElementById("validasiNama").innerHTML="";
		  	else if(num==2)
		  		document.getElementById("validasiUser").innerHTML="";
		  	else if(num==3)
		  		document.getElementById("validasiPass").innerHTML="";
		  	else if(num==4)
		  		document.getElementById("validasiCoPass").innerHTML="";
		  	else if(num==5)
		  		document.getElementById("validasiEmail").innerHTML="";
		  	return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
		    	if(num==1)
		    		document.getElementById("validasiNama").innerHTML=xmlhttp.responseText;
		    	else if(num==2)
		    		document.getElementById("validasiUser").innerHTML=xmlhttp.responseText;
		    	else if(num==3)
		    		document.getElementById("validasiPass").innerHTML=xmlhttp.responseText;
		    	else if(num==4)
		    		document.getElementById("validasiCoPass").innerHTML=xmlhttp.responseText;
		    	else if(num==5)
		    		document.getElementById("validasiEmail").innerHTML=xmlhttp.responseText;
		    }
		  }
		xmlhttp.open("GET","validasi.php?q="+temp+"&num="+num+"&pass="+pas,true);
		xmlhttp.send();
		}
</script>
</head>
<body>
	<?php include "header.php"; ?>
		<form id="registerform" method="post" action="register.php">
		<strong><h2>Pendaftaran Anggota Baru Ruserba</h2></strong><br>
		<pre>Username				<input type="text" name="username" id="usnm" onkeyup="validate(usnm.value,2,pwd.value);validate(pwd.value,3,usnm.value)"/><span id="validasiUser"></span></pre>
		<pre>Password				<input type="password" name="password"id="pwd" onkeyup="validate(pwd.value,3,usnm.value);validate(usnm.value,2,pwd.value)"/><span id="validasiPass"></span></pre>
		<pre>Confirm Password		<input type="password" name="password"id="pwd2" onkeyup="validate(pwd2.value,4,pwd.value)"/><span id="validasiCoPass"></span></pre>
		<pre>Nama Lengkap			<input type="text" name="nama" id="nama" onkeyup="validate(nama.value,1,'budi')"/><span id="validasiNama"></span></pre>
		<pre>Nomor HP				<input type="text" name="nohp"></pre>
		<pre>Alamat				<input type="textarea" name="alamat"></pre>
		<pre>Provinsi				<input type="text" name="provinsi"></pre>
		<pre>Kota					<input type="text" name="kota"></pre>
		<pre>Kode Pos				<input type="text" name="kodepos"></pre>
		<pre>Email					<input type="text" name="email"id="email" onkeyup="validate(email.value,5,null)"/><span id="validasiEmail"></span></pre>
		<pre><input type="checkbox" name="setuju"> Saya menyetujui semua persyaratan yang berlaku</pre>
		<input type="submit" value="Daftar"> <a href='index.php'>Kembali</a></form>
	<?php include "footer.php"; ?>
</body>
</html>