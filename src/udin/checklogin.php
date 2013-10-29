<?php
	/*$host="localhost"; // Host name 
	$username=""; // Mysql username 
	$password=""; // Mysql password 
	$db_name="test"; // Database name 
	$tbl_name="members"; // Table name 

	// Connect to server and select databse.

	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");*
	*/

	$con=mysqli_connect("localhost","root","","tubessatu");
		if(mysqli_connect_errno()){
				echo "Gagal Buka DB" . msqli_connect_error();
		}else{
			echo "Berhasil BUKA DB <br>";	
			}

	// username and password sent from form 
	$myusername=$_POST['myusername']; 
	$mypassword=$_POST['mypassword']; 

	echo "|".$myusername . "|" . $mypassword . "|";

	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	$query="SELECT * FROM customer WHERE username='$myusername' and password='$mypassword'";

	if ($stmt = mysqli_prepare($con, $query)) {

		/* execute query */
		mysqli_stmt_execute($stmt);

		/* store result */
		mysqli_stmt_store_result($stmt);
		
		$count=mysqli_stmt_num_rows($stmt);
		printf("Number of rows: %d.\n", mysqli_stmt_num_rows($stmt));

		/* close statement */
		mysqli_stmt_close($stmt);
	}

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){

	// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['myusername']="something";
	$_SESSION['mypassword']="something";
	header("location:login_success.php");
	}
	else {
		echo "Wrong Username or Password";
	}
?>