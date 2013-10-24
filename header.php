<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>RuSerBa</title>
 
<link rel="stylesheet" href="css/main.css" type="text/css" /> 
<script>
var d = document; 
function showhide(id,event){
	if(event=='hide'){ d.getElementById(id).style.display = 'none'; }
	else if(event=='show'){ d.getElementById(id).style.display = ''; }
}
/* ANIMATE POPUP BOX v.3.5 (Updated on 24 October 2013)
   this javascript originally created by Taufik on April 2009
   Allright Reserved
*/
ANIMATEPOPUPBOX = {
	mbox_w: 0,
	mbox_h: 0,
	mbox_fade: 100,
	mbox_name: '',
	mbox_head: '',
	delay: 10,
	win_w: screen.availWidth,
	win_h: screen.availHeight,
	animatemboxw: function(){
		mbox_left=(ANIMATEPOPUPBOX.win_w-ANIMATEPOPUPBOX.mbox_w)/2;
		mbox_top=(ANIMATEPOPUPBOX.win_h-ANIMATEPOPUPBOX.mbox_h)/2-100;
		d.getElementById("fade_mbox").style.top=mbox_top+"px";
		d.getElementById("mbox").style.top=mbox_top+"px";
		ANIMATEPOPUPBOX.mbox_w+=ANIMATEPOPUPBOX.delay;
		showhide("fade_mbox","show");
		d.getElementById("fade_mbox").style.left=mbox_left+"px";
		d.getElementById("mbox").style.left=mbox_left+"px";
		d.getElementById("fade_mbox").style.width=ANIMATEPOPUPBOX.mbox_w+"px";
		if(ANIMATEPOPUPBOX.mbox_w<300){ setTimeout("ANIMATEPOPUPBOX.animatemboxw()",10); } else { setTimeout("ANIMATEPOPUPBOX.animatemboxh()",50); }
	},
	animatemboxh: function(){
		mbox_top=(ANIMATEPOPUPBOX.win_h-ANIMATEPOPUPBOX.mbox_h)/2-100;
		d.getElementById("fade_mbox").style.top=mbox_top+"px";
		d.getElementById("mbox").style.top=mbox_top+"px";
		ANIMATEPOPUPBOX.mbox_h+=ANIMATEPOPUPBOX.delay;
		d.getElementById("fade_mbox").style.height=ANIMATEPOPUPBOX.mbox_h+"px";
		if(ANIMATEPOPUPBOX.mbox_h<200){ setTimeout("ANIMATEPOPUPBOX.animatemboxh()",10); } else { setTimeout("ANIMATEPOPUPBOX.faderbox()",50); }
	},
	faderbox: function(){
		ANIMATEPOPUPBOX.mbox_fade-=10;
		d.getElementById("fade_mbox").style.filter="alpha(opacity="+ANIMATEPOPUPBOX.mbox_fade+")";
		d.getElementById("fade_mbox").style.opacity=ANIMATEPOPUPBOX.mbox_fade/100;
		showhide("mbox","show");
		d.getElementById("mbox").innerHTML="<div id='mbox_header'>"+ANIMATEPOPUPBOX.mbox_head+"<span style='float:right'><a href='javascript:ANIMATEPOPUPBOX.closembox()'>CLOSE [ X ]</a></span></div>";
		if(ANIMATEPOPUPBOX.mbox_fade>0){ setTimeout("ANIMATEPOPUPBOX.faderbox()",100); } else { 
			showhide("fade_mbox","hide");
			d.getElementById("mbox").innerHTML+=d.getElementById(ANIMATEPOPUPBOX.mbox_name).innerHTML;
		}
	},
	showbox: function(id,head){
		ANIMATEPOPUPBOX.mbox_name=id;
		ANIMATEPOPUPBOX.mbox_head=head;
		showhide("back_mbox","show");
		setTimeout("ANIMATEPOPUPBOX.animatemboxw()",500);
	},
	closembox: function(){
		ANIMATEPOPUPBOX.mbox_w=10;
		ANIMATEPOPUPBOX.mbox_h=10;
		ANIMATEPOPUPBOX.mbox_fade=100;
		d.getElementById("mbox").innerHTML="";
		showhide("mbox","hide");
		d.getElementById("fade_mbox").style.filter="alpha(opacity=100)";
		d.getElementById("fade_mbox").style.opacity="1";
		d.getElementById("fade_mbox").style.width="10px";
		d.getElementById("fade_mbox").style.height="10px";
		d.getElementById("fade_mbox").style.left="0px";
		showhide("back_mbox","hide");
	}
}
</script>
</head>
 
<body id="index" class="home">

<div style="width:1000px; margin-left:auto; margin-right:auto">

<header id="banner" class="body">
	
	<span style="float:left"><a href="#"><img src="images/logo.png" alt="RuSerBa Logo" width="110" height="110"/></a></span>
	<h1><span><a href="#">RuSerBa<br><strong>Ruko Serba Ada</strong></a></span></h1>
	
 	<nav><ul id="menubar">
		<li class="active"><a href="index.php">Home</a></li>
		<li><a href="#">Kategori Barang</a></li>
		<li style="float:right"><button type="button">Search</button></li>
		<li style="float:right"><input type="text" name="search" placeholder="Cari Barang"></li>
	</ul></nav>
</header><!-- /#banner -->
<div id='mbox' style='display:none;'></div>
<div id='back_mbox' style='display:none;'></div><div id='fade_mbox' style='display:none;'></div>
<div id="userlogin">
<form method="post" action="index.php">
	<pre>Username	<input type="text" name="username"></pre>
	<pre>Password	<input type="password" name="password"></pre>
	<input type="submit" value="Login"> <a href="registerform.php">Daftar baru!</a>
</form>
</div>
<script>
if(typeof(Storage)!=="undefined"){
	if(localStorage.wbduser){
		var s = "<li><a href=\"index.php\" onclick=\"javascript:localStorage.removeItem('wbduser');\">Logout</a></li>";
		document.getElementById("menubar").innerHTML+=s;
		document.getElementById("banner").innerHTML+="<p>Selamat datang, <b>"+localStorage.wbduser+"</b>!</p>";
	}else{
		<?php
		include "koneksi.inc.php";
		$username=$_POST['username'];
		$password=$_POST['password'];
		if(empty($username) and empty($password)){
		?>
		var s = "<li><a href=\"javascript:ANIMATEPOPUPBOX.showbox('userlogin','User Login');\">Login</a></li>";
		s += "<li><a href=\"registerform.php\">Daftar</a></li>";
		document.getElementById("menubar").innerHTML+=s;
		<?php
		}else{
			$hasil = mysql_query("SELECT * FROM anggota where username='".$username."' and password='".$password."'",$koneksi);
			if(mysql_num_rows($hasil)==1){
				$row = mysql_fetch_array($hasil);
				echo "localStorage.wbduser=\"".$username."\";";
				?>
				var s = "<li><a href=\"index.php\" onclick=\"javascript:localStorage.removeItem('wbduser');\">Logout</a></li>";
				document.getElementById("menubar").innerHTML+=s;
				<?php
			}else{
				?>
				alert("Username atau password yang Anda masukan salah!");
				var s = "<li><a href=\"javascript:ANIMATEPOPUPBOX.showbox('userlogin','User Login');\">Login</a></li>";
				s += "<li><a href=\"registerform.php\">Daftar</a></li>";
				document.getElementById("menubar").innerHTML+=s;
				<?php
			}
		}
		?>
	}
}else{
	document.getElementById("menubar").innerHTML="Sorry, your browser does not support web storage...";
}
</script>