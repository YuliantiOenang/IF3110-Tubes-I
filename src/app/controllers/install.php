<?php

/**
 * Controller untuk penanganan instalasi database pertama kali.
 * Satu untuk menghapus tabel
 * Satu lagi untuk menciptakan tabel
 */
Class InstallController Extends BaseController {

	public function index() {
		//do nothing
	}

	public function make() {
		Product::createTable($this->registry);
		Product::insertDummy($this->registry);
	}

	public function clean() {
		Product::dropTable($this->registry);
	}

}