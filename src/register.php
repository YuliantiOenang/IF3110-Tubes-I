<html>
	<head>
		  <script type="text/javascript">	  
		  		  $uname = "";
				  $pword = "";
				  $cpword = "";
				  $fname = "";
				  $email = "";
				  $errorMessage = "";
				  $num_rows = 0;

function quote_smart($value, $handle) {

   if (get_magic_quotes_gpc()) {
       $value = stripslashes($value);
   }

   if (!is_numeric($value)) {
       $value = "'" . mysql_real_escape_string($value, $handle) . "'";
   }
   return $value;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	//====================================================================
	//	GET THE CHOSEN U AND P, AND CHECK IT FOR DANGEROUS CHARCTERS
	//====================================================================
	$uname = $_POST['username'];
	$pword = $_POST['password'];
	$cpword = $_POST['cpassword'];
	$fname = $_POST['fullname'];
	$email = $_POST['e-mail'];

	$uname = htmlspecialchars($uname);
	$pword = htmlspecialchars($pword);
	$fname = htmlspecialchars($fname);
	$email = htmlspecialchars($email);
	
	
	
	
	//====================================================================
	//	CHECK TO SEE IF U AND P ARE OF THE CORRECT LENGTH
	//	A MALICIOUS USER MIGHT TRY TO PASS A STRING THAT IS TOO LONG
	//	if no errors occur, then $errorMessage will be blank
	//====================================================================

	$uLength = strlen($uname);
	$pLength = strlen($pword);

	if ($uLength >= 5 && $uLength <= 20) {
		$errorMessage = "";
	}
	else {
		$errorMessage = $errorMessage . "Username harus di antara 5 sampai 20 karakter" . "<BR>";
	}
	
	if ($uname != $pword) {
	   $errorMessage = "";
	}
	else {
		 $errorMessage = $errorMessage . "Username dan passord tidak boleh sama." . "<BR>";
	}

	if ($pLength >= 8 && $pLength <= 16) {
		$errorMessage = "";
	}
	else {
		$errorMessage = $errorMessage . "Password harus di antara 8 sampai 16 karakter" . "<BR>";
	}
	
	if (


//test to see if $errorMessage is blank
//if it is, then we can go ahead with the rest of the code
//if it's not, we can display the error

	//====================================================================
	//	Write to the database
	//====================================================================
	if ($errorMessage == "") {

	$user_name = "root";
	$pass_word = "";
	$database = "login";
	$server = "127.0.0.1";

	$db_handle = mysql_connect($server, $user_name, $pass_word);
	$db_found = mysql_select_db($database, $db_handle);

	if ($db_found) {

		$uname = quote_smart($uname, $db_handle);
		$pword = quote_smart($pword, $db_handle);

	//====================================================================
	//	CHECK THAT THE USERNAME IS NOT TAKEN
	//====================================================================

		$SQL = "SELECT * FROM login WHERE L1 = $uname";
		$result = mysql_query($SQL);
		$num_rows = mysql_num_rows($result);

		if ($num_rows > 0) {
			$errorMessage = "Username already taken";
		}
		
		else {

			$SQL = "INSERT INTO login (L1, L2) VALUES ($uname, md5($pword))";

			$result = mysql_query($SQL);

			mysql_close($db_handle);

		//=================================================================================
		//	START THE SESSION AND PUT SOMETHING INTO THE SESSION VARIABLE CALLED login
		//	SEND USER TO A DIFFERENT PAGE AFTER SIGN UP
		//=================================================================================

			session_start();
			$_SESSION['login'] = "1";

			header ("Location: page1.php");

		}

	}
	else {
		$errorMessage = "Database Not Found";
	}




	}

}

		  </script>
	</head>
	<body>
		  <title>RUSERBA DIRECTOR'S CUT EDITION 2097</title>
	  		<div>
			<h1>Registrasi User Baru</h1>
			<div>Username:
			<input name="username" type="text" id="username"></div>
			&nbsp;
			<div>Password:<input name="password" type="password" id="password"></div>
			&nbsp;
			<div>Confirm Password:<input name="password" type="cpassword" id="cpassword"></div>
			&nbsp;
			<div>Nama Lengkap:<input name="fullname" type="text" id="fullname"></div>
			&nbsp;
			<div>Alamat e-mail:<input name="e-mail" type="text" id="e-mail"></div>
			&nbsp;
			<div>Alamat<input name="address" type="text" id="adress"></div>
			&nbsp;		
			<div>Provinsi:<input name="prov" type="text" id="prov"></div>
			&nbsp;
			<div>Kota/Kabupaten:<input name="city" type="text" id="city"></div>
			&nbsp;
			<div>No. HP:<input name="hp" type="text" id="hp"></div>
			&nbsp;
			&nbsp;
			</div><input type="submit" name="Submit" value="Register"></div>
			</form>
	<body>
</html>