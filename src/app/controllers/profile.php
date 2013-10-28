<?php

/**
 * Controller untuk penanganan profile
 */
Class ProfileController Extends BaseController {

	/**
	 * Menampilkan profile seseorang jika login
	 */	
	public function index() {
		$id = 1; //dummy

		$customer = Customer::getById($this->registry, $id);
		if (!empty($customer)) {
			//passing value ke template dan show
			$this->registry->template->customer = $customer;
			$this->registry->template->show('profile/customer');
		}
	}

}