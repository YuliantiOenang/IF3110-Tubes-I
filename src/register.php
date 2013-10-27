<!-- REGISTRATION FORM -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/general.css"></link>
		<link rel="stylesheet" type="text/css" href="css/form.css"></link>
		<meta charset="UTF-8"></meta>
		<script src="js/login.js"></script>
		<title>
			Lembar Pendaftaran
		</title>
	</head>
	<script>
		function validateregisForm()
		{
			var x=document.forms["regisform"]["username"].value;
			if (x!=null && x!="" && x.length >= 5)
			  {
				var y=document.forms["regisform"]["password"].value;
				if (y!=null && y!="" && y.length >= 8)
				{
					if (x != y)
					{
						x=document.forms["regisform"]["confirmpassword"].value;
						if (x == y )
						{
							x=document.forms["regisform"]["namalengkap"].value;
							if (x!=null && x!="")
							{
								x=document.forms["regisform"]["nomorhp"].value;
								if (x!=null && x!="")
								{
									x=document.forms["regisform"]["alamat"].value;
									if (x!=null && x!="")
									{
										x=document.forms["regisform"]["provinsi"].value;
										if (x!=null && x!="")
										{
											x=document.forms["regisform"]["kota"].value;
											if (x!=null && x!="")
											{
												x=document.forms["regisform"]["kodepos"].value;
												if (x!=null && x!="")
												{
													x=document.forms["regisform"]["email"].value;
													var atpos=x.indexOf("@");
													var dotpos=x.lastIndexOf(".");
													if (x!=null && x!="" && atpos>0 && dotpos>=atpos+2 && dotpos+1<x.length)
													{
														document.getElementById('submit').disabled = false;
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
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
					<li id="nav_hor">
						<a href="login.php" onclick="return login()">
							<b>
								MASUK
							</b>
						</a>
					</li>
					<li id="nav_hor">|</li>
					<li id="nav_hor"><a href="register.php"><b>DAFTAR</b></a></li>
				</ul>
			</div>
			<div id="header_bottom">
				<ul id="nav_bar">
					<li id="nav_hor_wrap"></li>
					<li id="nav_hor_wrap"><a href="category.php">MAKANAN</a></li>
					<li id="nav_hor_wrap"><a href="category.php">PAKAIAN</a></li>
					<li id="nav_hor_wrap"><a href="category.php">FURNITUR</a></li>
					<li id="nav_hor_wrap"><a href="category.php">ALAT DAPUR</a></li>
					<li id="nav_hor_wrap"><a href="category.php">LAIN-LAIN</a></li>
					<li id="search">
						<form action="search.php" method="post">
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
			<form name="regisform" action="register_card.php" method="post">
				<div id="form_one_row">
					<p id="label_form" class="label">
						Username
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" onkeydown="validateregisForm()" name="username">
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
					<input id="label_form" class="text_field" type="password" onkeydown="validateregisForm()" name="password">
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
					<input id="label_form" class="text_field" type="password" onkeydown="validateregisForm()" name="confirmpassword"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Nama Lengkap
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" onkeydown="validateregisForm()" name="namalengkap"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Nomor HP
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" onkeydown="validateregisForm()" name="nomorhp"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Alamat
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" onkeydown="validateregisForm()" name="alamat"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Kota/Kabupaten
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" onkeydown="validateregisForm()" name="kota"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Provinsi
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" onkeydown="validateregisForm()" name="provinsi"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Kode Pos
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" onkeydown="validateregisForm()" name="kodepos"></input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Email
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" onkeydown="validateregisForm()" name="email"></input>
				</div>
				<div id="form_one_row">
					<input id="submit" type="submit" disabled value="DAFTAR"></input>
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
