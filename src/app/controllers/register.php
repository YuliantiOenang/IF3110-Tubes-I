<?php

/**
 * Controller untuk penanganan register.
 * Bisa menangani register customer baru dan juga kartu kredit
 */
Class RegisterController Extends BaseController {

	/**
	 * Jika tidak ada parameter yang diberikan, jalankan register customer
	 */
	public function index() {
	    $this->customer();
	}

	/**
	 * Penanganan untuk register user
	 */
	public function customer() {
		$this->registry->template->show('register/customer');
	}

	/**
	 * Penanganan untuk register credit card
	 */
	public function card() {
		$this->registry->template->show('register/credit_card');
	}

	/**
	 * Asumsi seluruh data sudah valid, sudah divalidasi oleh AJAX
	 * Dalam real world tidak boleh ada asumsi seperti
	 * Selanjutnya masukkan ke database
	 */
	public function new_customer() {
		//validasi sedikit
		if (empty($_POST["username"]) or empty($_POST["email"]) or empty($_POST["password"]) or empty($_POST["fullname"])) {
			header("Location: " . SITEURL); die(); //redirect
		} else {
			$customer['username'] = $_POST["username"];
			$customer['email'] = $_POST["email"];
			$customer['password'] = hash('sha256', ($_POST["password"]));
			$customer['fullname'] = $_POST["fullname"];
			$customer['phone'] = $_POST["phone"];
			$customer['address'] = $_POST["address"];
			$customer['city'] = $_POST["city"];
			$customer['province'] = $_POST["province"];
			$customer['postcode'] = $_POST["postcode"];
	
			if (Customer::addCustomer($this->registry, $customer)) {
				//redirect
				header("Location: " . SITEURL . "/register/card/"); die();
				//http_redirect (SITEURL . '/register/card', array ('username' => $customer['username']), true, HTTP_REDIRECT_POST );
			} else {
				header("Location: " . SITEURL . "/register/failed" ); die();
			}
		}
	}

	/**
	 * Registrasi kartu kredit
	 * Asumsi selalu valid
	 */

	public function new_creditcard() {
		//validasi sedikit
		if (empty($_POST["card_name"]) or empty($_POST["card_number"]) or empty($_POST["card_expired"])) {
			header("Location: " . SITEURL); die();
		} else {
			$customer['card_name'] = $_POST["card_name"];
			$customer['card_number'] = $_POST["card_number"];
			$customer['card_expired'] = $_POST["card_expired"];
	
			if (Customer::updateCreditCard($this->registry, $customer)) {
				//redirect
				header("Location: " . SITEURL . "/register/success" ); die();
			} else {
				header("Location: " . SITEURL . "/register/failed" ); die();
			}
		}
	}

	public function success()
	{
		$this->registry->template->message = "Pendaftaran customer baru sukses. Silahkan login di kanan atas";
		$this->registry->template->show('common');
	}

	public function failed()
	{
		$this->registry->template->message = "Registrasi gagal, mohon maaf. Akan segera kami perbaiki.";
		$this->registry->template->show('common');
	}
}