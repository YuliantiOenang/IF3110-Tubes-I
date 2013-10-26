<!-- REGISTRATION FORM -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/general.css"></link>
		<meta charset="UTF-8"></meta>
		<title>
			Lembar Pendaftaran
		</title>
	</head>
	<script>
		function validateForm()
		{
		var x=document.forms["regisform"]["username"].value;
		if (x==null || x=="" || x.length < 5)
		  {
		  alert("Username Salah");
		  return false;
		  }
		 var y=document.forms["regisform"]["password"].value;
		if (y==null || y=="" || y.length < 8)
		  {
		  alert("Password Salah");
		  return false;
		  }
		 else if (x == y){
			alert("Username dan Password tidak boleh sama");
			return false;
			}
			x=document.forms["regisform"]["confirmpassword"].value;
		if (x != y )
		  {
		  alert("Konfirmasi Password Salah");
		  return false;
		  }
		x=document.forms["regisform"]["namalengkap"].value;
		if (x==null || x=="")
		  {
		  alert(" Nama Lengkap belum diisi");
		  return false;
		  }
		  x=document.forms["regisform"]["nomorhp"].value;
		if (x==null || x=="")
		  {
		  alert(" Nomor HP belum diisi");
		  return false;
		  }
		  x=document.forms["regisform"]["alamat"].value;
		if (x==null || x=="")
		  {
		  alert(" Alamat belum diisi");
		  return false;
		  }
		  x=document.forms["regisform"]["provinsi"].value;
		if (x==null || x=="")
		  {
		  alert(" provinsi belum diisi");
		  return false;
		  }
		  x=document.forms["regisform"]["kota"].value;
		if (x==null || x=="")
		  {
		  alert(" Kota/Kabupaten belum diisi");
		  return false;
		  }
		  x=document.forms["regisform"]["kodepos"].value;
		if (x==null || x=="")
		  {
		  alert(" KodePos belum diisi");
		  return false;
		  }
		  x=document.forms["regisform"]["email"].value;
		  var atpos=x.indexOf("@");
		  var dotpos=x.lastIndexOf(".");
		if (x==null || x=="" ||atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		  {
		  alert(" Email Salah");
		  return false;
		  }
		}
	</script>
	<body>
		<div id="header">
			<div id="logo">LOGO</div>
			<div id="header_top">
				<ul id="nav_bar_right">
					<li id="nav_hor"><a href="#">SHOPPING BAG</a></li>
					<li id="nav_hor">|</li>
					<li id="nav_hor"><a href="#">MASUK</a></li>
					<li id="nav_hor">|</li>
					<li id="nav_hor"><a href="#">DAFTAR</a></li>
				</ul>
			</div>
			<div id="header_bottom">
				<ul id="nav_bar">
					<li id="nav_hor_wrap"><a href="#">KATEGORI 1</a></li>
					<li id="nav_hor_wrap"><a href="#">KATEGORI 2</a></li>
					<li id="nav_hor_wrap"><a href="#">KATEGORI 3</a></li>
					<li id="nav_hor_wrap"><a href="#">KATEGORI 4</a></li>
					<li id="nav_hor_wrap"><a href="#">KATEGORI 5</a></li>
				</ul>
				<form id="search" action="#" method="post">
					<input id="text_field" type="text" name="name"></input>
					<input id="button" type="submit" value="CARI"></input>
				</form>
			</div>
		</div>
		<div id="content">
			<h1>Pendaftaran Pelanggan Ruserba Lapak Andalan</h1>
		<form name="regisform" action="index.php" onsubmit="return validateForm()" method="post">
			Username : 
			<div id ="textinside"> Minimal 5 Karakter </br><input type="text" name="username"></div> <br/>
			Password : 
			<div id ="textinside"> Minimal 8 Karakter </br><input type="password" name="password"></div> <br/>
			Confirm Password : 
			<div id ="textinside"> <input type="password" name="confirmpassword"> </div> <br/>
			Nama Lengkap :
			<div id ="textinside"> <input type="text" name="namalengkap"></div> <br/>
			Nomor HP : 
			<div id ="textinside"><input type="text" name="nomorhp"> </div><br/>
			Alamat :
			<div id ="textinside"> <input type="text" name="alamat"></div> <br/>
			Provinsi : 
			<div id ="textinside"><input type="text" name="provinsi"> </div><br/>
			Kota/Kabupaten :
			<div id ="textinside"> <input type="text" name="kota"></div> <br/>
			KodePos :
			<div id ="textinside"> <input type="text" name="kodepos"></div> <br/>
			Email :
			<div id ="textinside"> <input type="text" name="email"></div><br/>
			<input type="submit" value="Submit">
		</form>
		</div>
		<div id="footer">
			<p>Copyright 2013 by <b>Kelompok LapAn</b></p>
			<p>Muhammad Nassirudin - 13511044 | Arief Pradana - 13511062 | Ryan Ignatius Hadiwijaya - 13511070</p>
		</div>
	</body>
</html>
