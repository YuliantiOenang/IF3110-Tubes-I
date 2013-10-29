<?php

	
	session_start();

	$db=mysql_connect("localhost","root",null) or die("cannot connect");
	mysql_select_db("tubesweb")or die("cannot select DB");

	$loginmessage = NULL;
	$is_loginattempt = $_SERVER["REQUEST_METHOD"] == "POST";
	$is_signedin = isset($_SESSION["username"]);

	function login_userpass() {
		global $db;
		
		// Query to database
		$clean_username = stripslashes(htmlspecialchars(trim($_POST["username"])));
		$clean_password = stripslashes(htmlspecialchars(trim($_POST["password"])));
		$username_query = mysql_real_escape_string($clean_username,$db );
		$password_query = mysql_real_escape_string($clean_password,$db );
		$sqlquery = "SELECT * FROM user WHERE username='".$username_query."' AND password='".$password_query."'";
		$sqlresult = mysql_query($sqlquery,$db ) or die ('Unable to run query:'.mysql_error());
		
		$count=mysql_num_rows($sqlresult);
		
		// Return TRUE if matched exactly 1 username-password
		if  ($count == 1 ) {
			$_SESSION["username"] = mysql_fetch_array($sqlresult)["username"];
			
			return TRUE;
		} else {
			
			return FALSE;
		}
		
		
	}

	function login_cookie() {
		global $db;
		
		if (!isset($_COOKIE["username"]) || !isset($_COOKIE["cookie_id"])) {
			return FALSE;
		}
		
		$cookie_id = $_COOKIE["cookie_id"];
		$sqlquery = "SELECT * FROM user WHERE cookie_id='".$cookie_id."'";
		$sqlresult = mysql_query($sqlquery,$db );
		
		// Return TRUE if matched exactly 1 user-id + cookie has not expired yet
		$userentry = mysql_fetch_array($sqlresult);
		if ((mysql_num_rows($sqlresult) == 1) && (time() < $userentry["cookie_expire"])) {
			$_SESSION["username"] = $userentry["username"];
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function update_cookie($username) {
		global $db;
		
		$cookie_id = uniqid(md5($username), TRUE);
		$cookie_expire = time() + (60*60*24*30);
		setcookie("cookie_id", $cookie_id, $cookie_expire);
		$sqlquery = "UPDATE user SET cookie_id='".$cookie_id."' , cookie_expire='".$cookie_expire."' WHERE username='".$username."'";
		$sqlresult = mysql_query($sqlquery,$db );
	}

	if (!$is_signedin) {
	
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Try to login with username and password from POST
			// Failure means wrong username-password
			$is_signedin = login_userpass();
			if (!$is_signedin) {
				$loginmessage = "Could not login with username and password. Please try again.";
			}
		} else {
			// Try to login with cookies
			// Failure means no attempted login
			$is_signedin = login_cookie();
		}
	}

	if ($is_signedin) {
	
		update_cookie($_SESSION["username"]);
	}

	// Close connection
	mysql_close($db);

?>

<html>
<head>
	<script language="javascript">

		function hideLoginForm() {
			document.getElementById("page-wrapper").style.display = "none";
		}

		function showLoginForm() {
			document.getElementById("page-wrapper").style.display = "block";
		}

		
	</script>
	</body>
	</html>
	
	
    <div id="light" class="white_content">
	<form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			Username: <input type="text" name="username"/><br/>
			Password: <input type="password" name="password"/><br/>
			<input type="submit" value="Login"/>
		</form>
	<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
    <div id="fade" class="black_overlay"></div>
	<link href="stylekartu.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="stylereg.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="stylesearch.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
	<div id="divsearch" >
		<form id="formuser" name="formsearch" action="searchbarang.php" method="get" tag="registrasi">
			<span id="tabuser">
				<?php if (!$is_signedin) : ?>
					<a href="registrasi.php" style="text-decoration:none;" > <span id="menuuser1" > <b>REGISTER &nbsp; &nbsp;  </b> </span> </a> &nbsp; &nbsp; 
					<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'" style="text-decoration:none;"> <span id="menuuser2" > <b>LOGIN  &nbsp; &nbsp;   </b> </span> </a>  &nbsp; &nbsp					
				<?php else : ?>
					<span id="welcome" > <b>&nbsp; &nbsp; Welcome , &nbsp; <?php echo $_SESSION["username"]; ?> ! &nbsp; &nbsp;  </b> </span> </a> 
					<a id="menuuser2" style="text-decoration:none;" href="logout.php" ><b> LOG OUT </b></a> &nbsp; &nbsp; 
					<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menuuser3" > <b>PROFIL  &nbsp; &nbsp;  </b> </span> </a>  &nbsp; &nbsp; 
					<span> <img id="logotroli" src="images/cartlogo.png" height="22" width="22" > </span> &nbsp;
					<span id="cartmenu" > <b>Produk :    </b> </span> 
					<span id="cartmenu" > <b>Rp ,-  </b> </span> 
				<?php endif ?>
				
				
			</span>
			
		</form> 
		<form id="formsearch" name="formsearch" action="searchbarang.php" method="get" tag="registrasi">
			<img id="logo" src="images/logo10.gif" height="60" width=auto > <br/>  <br/>
			<span id="tabkategori">
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;" > <span id="menukategori1" > <b>BERAS &nbsp; &nbsp;  |</b> </span> </a> &nbsp; &nbsp; 
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori2" > <b>ROTI  &nbsp; &nbsp;  | </b> </span> </a>  &nbsp; &nbsp;
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori3" > <b>DAGING SEGAR   &nbsp; &nbsp;  |</b> </span> </a>  &nbsp; &nbsp; 
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori4" > <b>DAGING OLAHAN  &nbsp; &nbsp;  |</b> </span> </a>  &nbsp; &nbsp; 
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori5" > <b>SAYUR  &nbsp; &nbsp;  |</b> </span> </a>  &nbsp; &nbsp; 
			<a href="detailProduct.php?nama=',$row['namabarang'],'" style="text-decoration:none;"> <span id="menukategori6" > <b>BUAH </b> </span> </a>  &nbsp; &nbsp;
			</span> </br><br/>
			<input id="namasearch" name="namabarang" placeholder="Nama Barang" type="text"  /> 
			<select  id="kat" value="Kategori" name="kategori">
				<option value="" >Kategori</option>
				<option value="beras">Beras</option>
				<option value="roti">Roti</option>
				<option value="daging segar">Daging Segar</option>
				<option value="daging olahan">Daging Olahan</option>
				<option value="buah">Buah</option>
				<option value="sayur">Sayur</option>
			</select>
			<select id="harga" value="harga" name="harga">
				<option value="0" >Harga</option>
				<option value="1">< Rp 10.000</option>
				<option value="2">Rp 10.000 <= harga < Rp 25.000 </option>
				<option value="3">Rp 25.000 <= harga <  Rp 50.000 </option>
				<option value="4">Rp 50.000 <= harga <  Rp 75.000 </option>
				<option value="5">>= Rp 75.000</option>
			</select>
			<input id="tombol2"" name="search" type="submit" value="search" /> 
		</form>
	</div>

</head>
<body>
