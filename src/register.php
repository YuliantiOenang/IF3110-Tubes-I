<!-- REGISTRATION FORM -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/general.css"></link>
		<link rel="stylesheet" type="text/css" href="css/form.css"></link>
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
			<div id="header_top">
				<ul id="nav_bar_right">
					<li id="nav_hor">
						<a href="shoppingbag.php">
							<img src="img/cart.png"></img>
						</a>
					</li>
					<li id="nav_hor">|</li>
					<li id="nav_hor"><a href="#"><b>MASUK</b></a></li>
					<li id="nav_hor">|</li>
					<li id="nav_hor"><a href="register.php"><b>DAFTAR</b></a></li>
				</ul>
			</div>
			<div id="header_bottom">
				<ul id="nav_bar">
					<li id="nav_hor_wrap"></li>
					<li id="nav_hor_wrap"><a href="category.php">KATEGORI 1</a></li>
					<li id="nav_hor_wrap"><a href="category.php">KATEGORI 2</a></li>
					<li id="nav_hor_wrap"><a href="category.php">KATEGORI 3</a></li>
					<li id="nav_hor_wrap"><a href="category.php">KATEGORI 4</a></li>
					<li id="nav_hor_wrap"><a href="category.php">KATEGORI 5</a></li>
					<li id="search">
						<form action="#" method="post">
							<input id="text_field" type="text" name="name"></input>
							<input id="button" type="submit" value="CARI"></input>
						</form>
					</li>
				</ul>
			</div>
			<a id="logo" href="index.php">
				<img src="img/logo.png"></img>
			</a>
			<div id="title">
				<h1>
					RuSerBa LapAn
				</h1>
				<p id="subtitle">
					Ruko Serba Ada Lapak Andalan
				</p>
			</div>
		</div>
		<div id="content">
			<h1 id="content_title">Pendaftaran Pelanggan Ruserba Lapak Andalan</h1>
			<form name="regisform" action="index.php" onsubmit="return validateForm()" method="post">
				<div id="form_one_row">
					<p id="label_form" class="label">
						Username
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="username">
						<p class="info">
							(Minimal 5 karakter)
						</p>
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Password
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="password" name="password">
						<p class="info">
							(Minimal 8 Karakter)
						</p>
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Ulangi Password
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="password" name="confirmpassword"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Nama Lengkap
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="namalengkap"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Nomor HP
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="nomorhp"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Alamat
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="alamat"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Kota/Kabupaten
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="kota"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Provinsi
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="provinsi"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Kode Pos
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="kodepos"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Email
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="email"></input>
				</div>
				<div id="form_one_row">
					<input id="submit" type="submit" value="DAFTAR"></input>
				</div>
				<div id="form_one_row"></div>
			</form>
		</div>
		<div id="footer">
			<p>Copyright 2013 by <b>Kelompok LapAn</b></p>
			<p>Muhammad Nassirudin - 13511044 | Arief Pradana - 13511062 | Ryan Ignatius Hadiwijaya - 13511070</p>
		</div>
	</body>
</html>
