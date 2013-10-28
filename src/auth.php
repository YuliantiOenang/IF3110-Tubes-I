<?php
	require_once('db.php');

	$login_user_id = null;

	// Fungsi untuk memeriksa apakah user sudah login.
	function isLoggedIn()	{
		global $login_user_id;
		return isset($login_user_id);
	}

	function clearClientCookie()	{
		setcookie('hash', '', time()-100000);
		setcookie('id', '', time()-100000);
	}
	
	if (isset($_COOKIE['hash']) || isset($_COOKIE['id']))	{
		
		// Dua-duanya harus di-set.
		if (!isset($_COOKIE['hash']) || !isset($_COOKIE['id'])) clearClientCookie();
		else {
			databaseConnect();
			$client_hash = $_COOKIE['hash'];
			$client_id = $_COOKIE['id'];

			$user = getUserData($client_id);
			if (is_null($user))	clearClientCookie();
			else	{
				// Periksa kebenaran nilai hash pada client.
				$server_hash = getLoginHash($user['username'], $user['password']);

				// Cookie tidak konsisten/dipalsukan, hapus semua informasi di cookie.
				if ($client_hash != $server_hash)	{
					clearClientCookie();
				} else {
					// Cookie valid, buat user ID.
					$login_user_id = $_COOKIE['id'];
				}
			}
			databaseDisconnect();
		}
	}
?>
