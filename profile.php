<?php include "header.php";?>
<?php include "sidebar.php";?>
<article id="featured" class="body">
		<h2 id="headername"></h2>
		<div id="info"></div>
			<span id="foto"></span>
			<pre id="nama">Nama Lengkap 	:</pre>
			<pre id="nomorhp">Nomor Hp		:</pre>
			<pre id="alamat">Alamat		:</pre>
			<pre id="provinsi">Provinsi		:</pre>
			<pre id="kota">Kota			:</pre>
			<pre id="kodepos">Kode Pos		:</pre>
			<pre id="email">Email			:</pre>
			<pre id="usernamep">Username		:</pre>
		<form method="action" action="editprofile.php">
		<input type="submit" value="Edit Profile"> <a href="registercardform.php">Daftarkan kartu kredit saya</a>
		</form>
</article><!-- /#featured -->
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
				document.getElementById("nama").innerHTML+=str[0];
				document.getElementById("nomorhp").innerHTML+=str[1];
				document.getElementById("alamat").innerHTML+=str[2];
				document.getElementById("provinsi").innerHTML+=str[3];
				document.getElementById("kota").innerHTML+=str[4];
				document.getElementById("kodepos").innerHTML+=str[5];
				document.getElementById("email").innerHTML+=str[6];
				document.getElementById("usernamep").innerHTML+=str[7];
				document.getElementById("foto").innerHTML+="<img src='images/"+str[9]+"'>";
			}
		}
		xmlhttp.open("POST","ajaxprofile.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("username="+localStorage.wbduser);
	}else{
		var s = "<strong>Maaf, halaman ini tidak bisa diakses jika kamu belum login.</strong><br>";
		s += "<p>Halaman akan segera dialihkan ke halaman registrasi...</p>";
		document.getElementById("featured").innerHTML = s;
		setTimeout("window.location='registerform.php'",3000);
	}
}else{
	document.getElementById("menubar").innerHTML="Maaf, browser kamu tidak support Web Storage sehingga informasi username tidak dapat disimpan...";
}
</script>
<?php include "footer.php";?>

</div>
</body>
</html>