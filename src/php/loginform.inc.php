<?php
	if(isset($_POST['username'])&&isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(!empty($username)&&!empty($password)){
			$query = "SELECT `id` FROM `user` WHERE `username`='$username' AND `password`='$password'";
			if ($query_run = mysql_query($query)){
				$query_num_rows = mysql_num_rows($query_run);
				if($query_num_rows == 0){
					echo 'Invalid Username/Password Combination';
				}
				else if($query_num_rows == 1) {
					$user_id = mysql_result($query_run,0,'id');
					$_SESSION['user_id']=$user_id;
					header('Location: php/login_success.php');
				}
			}
		}
			else{
				echo 'No';
			}
	}
?>