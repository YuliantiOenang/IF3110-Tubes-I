<?php

Class HomeController Extends BaseController {

	public function index() {
		$this->registry->template->title = 'Toko Komplit';
	    $this->registry->template->show('home');
	}

}