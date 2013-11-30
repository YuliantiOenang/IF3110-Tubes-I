<?php include "header.php";?>
<script>
if(typeof(Storage)!=="undefined"){
	if(localStorage.wbduser){
		var xmlhttp;
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				var str = xmlhttp.responseText.split("||");
				document.getElementById("nama").value=str[0];
				document.getElementById("nomorhp").value=str[1];
				document.getElementById("alamat").value=str[2];
				document.getElementById("provinsi").value=str[3];
				document.getElementById("kota").value=str[4];
				document.getElementById("kodepos").value=str[5];
				document.getElementById("email").value=str[6];
				document.getElementById("usnm").value=str[7];
				document.getElementById("pwd").value=str[8];
			}
		}
		xmlhttp.open("POST","ajaxprofile.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("username="+localStorage.wbduser);
	}else{
	
	}
}else{
	document.getElementById("menubar").innerHTML="Sorry, your browser does not support web storage...";
}
</script>
<article id="featured" class="body">
		<h2 id="headername"></h2>
		<form method="post" action="editprofilesave.php" enctype="multipart/form-data">
		<div id="info">
			<pre>Username				<input type="text" name="username" id="usnm"></pre>
			<pre>Password				<input type="password" name="password" id="pwd" onkeyup="validate(pwd.value,3,usnm.value);validate(usnm.value,2,pwd.value)"/><span id="validasiPass"></span></pre>
			<pre>Confirm Password		<input type="password" name="password2" id="pwd2" onkeyup="validate(pwd2.value,4,pwd.value)"/><span id="validasiCoPass"></span></pre>
			<pre>Nama Lengkap			<input type="text" name="nama" id="nama" onkeyup="validate(nama.value,1,'budi')"/><span id="validasiNama"></span></pre>
			<pre>Nomor HP				<input type="text" name="nomorhp" id="nomorhp"></pre>
			<pre>Profile Photo			<input type="file" name="foto"></pre>
			<pre>Alamat				<input type="textarea" name="alamat" id="alamat"></pre>
			<pre>Provinsi				<input type="text" name="provinsi" id="provinsi"></pre>
			<pre>Kota					<input type="text" name="kota" id="kota"></pre>
			<pre>Kode Pos				<input type="text" name="kodepos" id="kodepos"></pre>
			<pre>Email					<input type="text" name="email" id="email" onkeyup="validate(email.value,5,null)"/><span id="validasiEmail"></span></pre>
			<input type="submit" value="Save"> <a href='profile.php'>Kembali</a>
		</div>
		</form>
</article><!-- /#featured -->
<?php include "footer.php";?>

</div>
</body>
</html>