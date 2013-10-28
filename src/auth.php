<?php
	require_once('db.php');

	$login_user_id = null;

	// Fungsi untuk memeriksa apakah user sudah login.
	function isLoggedIn()	{
		global $login_user_id;
		return isset($login_user_id);
	}
	
	if (isset($_COOKIE['hash']) && isset($_COOKIE['id']))	{

		$client_hash = $_COOKIE['hash'];
		databaseConnect();
		$user = getUserData($user_id);

		// Periksa kebenaran nilai hash pada client.
		$server_hash = md5($user['username'] . $user['password'] . $_SERVER['REMOTE_ADDR']); // Bad practice, actually...

		// Cookie tidak konsisten/dipalsukan, hapus semua informasi di cookie.
		if ($client_hash != $server_hash)	{
			setcookie('hash', '', time()-100000);
			setcookie('id', '', time()-100000);
		} else {
			// Cookie valid, buat user ID.
			$login_user_id = $_COOKIE['id'];
		}
		databaseDisconnect();
	}
?>
