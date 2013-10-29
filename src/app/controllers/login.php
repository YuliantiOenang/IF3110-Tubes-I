<?php

/**
 * Controller untuk penanganan login.
 * Memeriksa apakah user dan password benar.
 *		Jika benar, maka kembali ke halaman sebelumnya (atau cukup home)
 *					dengan status sudah login
 *		Jika salah, maka tampilkan halaman yang menunjukkan login salah
 */
Class LoginController Extends BaseController {

	public function index() {
		//todo
	}

	/**
	 * fungsi LOGOUT
	 */
	public function destroy() {
		session_start();
		// Unset all of the session variables.
		$_SESSION = array();
		//and destroy
		session_destroy();
		//redirect
		header("Location: " . SITEURL); die();
	}
}