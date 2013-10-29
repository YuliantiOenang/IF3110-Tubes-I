<?php
	// Skip jika argument kurang.
	$result = array();
	if (isset($_POST['username']) && isset($_POST['password']))	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		require_once('../util.php');
		require_once('../db.php');

		databaseConnect();
		$user = getUserDataFromUsername($username);

		if (isset($user))	{
			$pass_hash = md5($password);
			if ($pass_hash == $user['password'])	{

				// Password benar!
				// Persiapkan hash untuk cookie.
				$hash = getLoginHash($username, $pass_hash);
				$id = $user['id_user'];

				setcookie('hash', $hash, time()+2592000, '/');
				setcookie('id', $id, time()+2592000, '/');
				setcookie('username', $username, time()+2592000, '/');

				$result['status'] = 1;
			} else {
				// Password salah!
				$result['status'] = 0;
			}
		} else $result['status'] = 0;
	} else $result['status'] = 0;
	echo json_encode($result);
?>
