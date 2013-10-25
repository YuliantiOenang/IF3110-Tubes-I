<?php
class Home
{
	public function index(array $var)
	{
		$u = new View('home/index');
		$u->render();
	}

	public function gallery(array $var)
	{
		header("Location: ".SITE_ROOT.NAME_ROOT."/index.php/barang");
	}
}

