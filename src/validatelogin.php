<?php
session_start();

if($_POST){
	if($_POST['username'] && $_POST['password']){
		$username = $_POST['username'];
		$password = $_POST['password'];
		mysql_connect("localhost", "root", "") or die("problem with connection...");
		mysql_select_db("ruserba");

		$query = mysql_query("SELECT * FROM `user` WHERE username='".$username."'");
		$numrows = mysql_num_rows($query);

		if($numrows != 0){
			while($row = mysql_fetch_assoc($query)){
				$checkuser = $row['username'];
				$checkpass = $row['password'];
			}
			if($username==$checkuser){
				if($password==$checkpass){			
						$_SESSION['username'] = $username;
						$expire = time()+2592000;
						setcookie('sinarjaya', $username, $expire);
						echo "success";			
				}else{
					echo "password";
				}		
			}
			// }else{
			// 	echo "username";
			// }	
		}else{
			echo "register";	
		}	
	}else{
		echo "Username dan atau password harus diisi";
	}
}
?>