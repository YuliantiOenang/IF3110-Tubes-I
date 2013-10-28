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
		$customer['username'] = $_POST["username"];
		$customer['email'] = $_POST["email"];
		$customer['password'] = hash('sha256', ($_POST["password"]));
		$customer['fullname'] = $_POST["fullname"];
		$customer['phone'] = $_POST["phone"];
		$customer['address'] = $_POST["address"];
		$customer['city'] = $_POST["city"];
		$customer['province'] = $_POST["province"];
		$customer['postcode'] = $_POST["postcode"];

		Customer::addCustomer($this->registry, $customer);
	}
}