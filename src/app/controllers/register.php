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
}