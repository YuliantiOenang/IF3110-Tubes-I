<?php
session_start();
	include('conn.php');
	//INSERT NEW MEMBER INTO DATABASE
	if(isset($_POST['username']) && isset($_POST['fullname']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['nohp']) && isset($_POST['alamat']) && isset($_POST['provinsi']) && isset($_POST['kabupaten']) && isset($_POST['kodepos'])){
		mysql_query ("INSERT INTO anggota (username, fullname, nohp, email, alamat, kabupaten, provinsi, kodepos, password ) VALUES (' $_POST[username]', '$_POST[fullname]', '$_POST[nohp]', '$_POST[email]', '$_POST[alamat]', '$_POST[kabupaten]', '$_POST[provinsi]', '$_POST[kodepos]', '$_POST[password]' )");
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		$_SESSION['fullname'] = $_POST['fullname'];
		$_SESSION['email'] = $_POST['email'];
		header('Location: index.php'); 
	}
	else if(isset($_POST['username']) && $_POST['password']){
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		
		$sql = "SELECT * FROM anggota WHERE username='" . $_SESSION['username'] ."' AND Password = '". $_SESSION['password'] ."'";
		$result = mysql_query($sql);
		$row = mysql_num_rows($result);
		if ($row == 0)
		{
			echo "Login Fail";
			session_unset();
			echo "<meta http-equiv=\"refresh\"
			content=\"3; URL = index.php\">";
		}
		else{
			echo "sukses";
			header('Location: index.php'); 
		}
	}
	else{
		echo "";
	}
	//Close specified connection
	//mysql_close($conn);
?>