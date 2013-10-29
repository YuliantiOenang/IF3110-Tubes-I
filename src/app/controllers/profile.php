<?php

/**
 * Controller untuk penanganan profile
 */
Class ProfileController Extends BaseController {

	/**
	 * Menampilkan profile seseorang jika login
	 */	
	public function index() {
		if (session_id() == '') session_start();

		if(!isset($_SESSION['logged_userid'])) {
		    //redirect ke registrasi user
		    header("Location: " . SITEURL . "/register/customer"); die();
		} else {
			$id = $_SESSION['logged_userid'];

			$customer = Customer::getById($this->registry, $id);
			if (!empty($customer)) {
				//passing value ke template dan show
				$this->registry->template->customer = $customer;
				$this->registry->template->show('profile/customer');
			}
		}
	}
}