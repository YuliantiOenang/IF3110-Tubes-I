<?php

Class CartController Extends BaseController {

	public function index() {
	    if (session_id() == '') session_start();

		if(!isset($_SESSION['logged_userid'])) {
		    //redirect ke registrasi user
		    header("Location: " . SITEURL . "/register/customer"); die();
		} else {
			$customer_id = $_SESSION['logged_userid'];

			$items = ShoppingBag::getNotPurchasedByCustomerId($this->registry, $customer_id);
			$this->registry->template->items = $items;
			$this->registry->template->show('cart');
		}
	}
}