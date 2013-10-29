<?php

Class ProductController Extends BaseController {

	public function index() {
		//$this->registry->template->title = 'Toko Komplit';
	    ///$this->registry->template->show('index');
	}

	public function detail($id) {
		$this->registry->template->CONFIG = $this->registry->config;
		$this->registry->template->product_id = $id;
		$this->registry->template->show('product');
	}


	public function search($keyword) {
		$this->registry->template->CONFIG = $this->registry->config;
		$this->registry->template->keyword = $keyword;
		$this->registry->template->show('listproduct');
	}

	public function category($category) {
		$this->registry->template->CONFIG = $this->registry->config;
		$this->registry->template->category = $category;
		$this->registry->template->show('listproduct');
	}
}