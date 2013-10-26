<?php

/**
 * Controller untuk 404 Error
 */
Class Error404Controller Extends BaseController {

	public function index() {
	    $this->registry->template->show('error/404');
	}

}