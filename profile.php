<?php include "header.php";?>
<?php include "sidebar.php";?>
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
	
	}
}else{
	document.getElementById("menubar").innerHTML="Sorry, your browser does not support web storage...";
}
</script>
<article id="featured" class="body">
		<h2 id="headername"></h2>
		<div id="info"></div>
			<span id="foto"></span>
			<pre><h2 id="nama">   </h2></pre>
			<pre><h3 id="usernamep">   @</h3></pre><hr>
			<pre><h3>Basic Info</h3></pre>
			<pre id="nomorhp">Nomor Hp		:  </pre>
			<pre id="alamat">Alamat		:  </pre>
			<pre id="provinsi">Provinsi		:  </pre>
			<pre id="kota">Kota			:  </pre>
			<pre id="kodepos">Kode Pos		:  </pre>
			<pre id="email">Email			:  </pre>
		<form method="action" action="editprofile.php">
		<input type="submit" value="Edit Profile">
		</form>
</article><!-- /#featured -->
<?php include "footer.php";?>

</div>
</body>
</html>