<?php

/**
 * Controller untuk penanganan profile
 */
Class ProfileController Extends BaseController {

	public function index() {

	}

	/**
	 * Menampilkan profile seseorang berdasarkan id
	*/
	public function customer($id) {
		$customer = Customer::getById($this->registry, $id);
		if (!empty($customer)) {
			//passing value ke template dan show
			$this->registry->template->customer = $customer;
			$this->registry->template->show('profile/customer');
		}
	}

}