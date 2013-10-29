<?php

Class CartController Extends BaseController {

	public function index() {
		//$this->registry->template->title = 'Toko Komplit';
		//$this->registry->template->CONFIG = $this->registry->config;
	    $this->registry->template->show('cart');

	    if (session_id() == '') session_start();

		if(!isset($_SESSION['logged_userid'])) {
		    //redirect ke registrasi user
		    header("Location: " . SITEURL . "/register/customer"); die();
		} else {
			$customer_id = $_SESSION['logged_userid'];

			$items = ShoppingBag::getNotPurchasedByCustomerId($this->registry, $customer_id);
			if (!empty($items)) {
				//passing value ke template dan show
				$this->registry->template->items = $items;
				$this->registry->template->show('cart');
			}
		}
	}
}