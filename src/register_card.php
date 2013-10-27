<!-- Credit Card Registration Form -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/general.css"></link>
		<link rel="stylesheet" type="text/css" href="css/form.css"></link>
		<meta charset="UTF-8"></meta>
		<script src="js/login.js"></script>
		<title>
			Pendaftaran Kartu Kredit
		</title>
	</head>
	<script>
		function isDigits(argvalue) {
			argvalue = argvalue.toString();
			var validChars = "0123456789";
			var startFrom = 0;
			if (argvalue.substring(0, 2) == "0x") {
			   validChars = "0123456789abcdefABCDEF";
			   startFrom = 2;
			} else if (argvalue.charAt(0) == "0") {
			   validChars = "01234567";
			   startFrom = 1;
			}
			for (var n = 0; n < argvalue.length; n++) {
				if (validChars.indexOf(argvalue.substring(n, n+1)) == -1) return false;
			}
		  return true;
		}
		
		function validatecreditForm()
		{
			var x=document.forms["creditform"]["cardnumber"].value;
			if (x==null || x=="" || !isDigits(x) )
			  {
			  alert("Card Number salah");
			  return false;
			  }
			var y=document.forms["creditform"]["nameoncard"].value;
			if (y==null || y=="")
			  {
			  alert("Name on Card harus diisi");
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
					<li id="nav_hor_wrap"><a href="category.php?kat=Makanan">MAKANAN</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Pakaian">PAKAIAN</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Furnitur">FURNITUR</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Peralatan Dapur">ALAT DAPUR</a></li>
					<li id="nav_hor_wrap"><a href="category.php?kat=Alat Sehari - hari">LAIN-LAIN</a></li>
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
			<h1>Lembar Pemakaian Kartu Kredit</h1>
			<form name="creditform" action="index.php" onsubmit="return validatecreditForm()" method="post">
				<div id="form_one_row">
					<p id="label_form" class="label">
						CardNumber
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="cardnumber">
					</input>
				</div>
				<div id="form_one_row">
					<p id="label_form" class="label">
						Name on Card
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" class="text_field" type="text" name="nameoncard">
					</input>
				</div>
					<div id="form_one_row">
					<p id="label_form" class="label">
						Expired Date
					</p>
					<p id="label_form" class="partition">
						:
					</p>
					<input id="label_form" type="date" name="expireddate">
					</input>
				</div>
				<div id="form_one_row">
					<input id="submit" type="submit" value="Submit"></input>
				</div>
			</form>
			<form action="index.php" method="post">
				<div id="form_one_row">
					<input id="submit" type="submit" value="Skip"></input>
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