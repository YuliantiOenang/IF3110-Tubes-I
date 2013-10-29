<?php

Class ProductController Extends BaseController {

	public function index() {
		//$this->registry->template->title = 'Toko Komplit';
	    ///$this->registry->template->show('index');
	}

	public function detail($id) {
		$this->registry->template->product_id = $id;
		$this->registry->template->show('product');
	}
}