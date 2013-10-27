<!-- Edit Profile Form -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/general.css"></link>
		<link rel="stylesheet" type="text/css" href="css/form.css"></link>
		<meta charset="UTF-8"></meta>
		<title>
			Edit Profile
		</title>
	</head>
	<script>
	function validatepass()
		{
			var x=document.forms["editform"]["changepassword"].value;
			var y=document.forms["editform"]["confirmchangepassword"].value;
			if (x==null || x=="" || x!=y )
			  {
			  alert("Password Salah");
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
					<li id="nav_hor_wrap"><a href="category.php?kat=Makanan">MAKANAN</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Pakaian">PAKAIAN</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Furnitur">FURNITUR</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Peralatan Dapur">ALAT DAPUR</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Alat Sehari - hari">LAIN-LAIN</a></li>
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
			<h1>Edit Profile</h1>
			<form name="editform" action="profile.php" onsubmit="return validatepass()" method="post">
				<div id="form_one_row">
					<p id="label_form" class="label">
						Nama Lengkap
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="namalengkap">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Ganti Password	
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="password" name="changepassword">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Konfirmasi Password
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="password" name="confirmchangepassword">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Nomor HP
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="nomorhp">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Alamat
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="alamat">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Kota/Kabupaten
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="kota">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Provinsi
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="provinsi">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Kode Pos
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="kodepos">
					</input>
				</div>
				<div id="form_one_row">
					<input id="submit" type="submit" value="SUBMIT"></input>
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