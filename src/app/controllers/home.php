<?php

Class HomeController Extends BaseController {

	public function index() {
	    $this->registry->template->show('home');
	}

}