<?php
class Home
{
	public function index(array $var)
	{
        $v = new View('home/index');
        $v2 = new View ('home/login');
        $v->setData('loginView', $v2->render(false)); // rendering Login page
        $v->render();
	}

	public function gallery(array $var)
	{
		header("Location: ".SITE_ROOT.NAME_ROOT."/index.php/barang");
	}
}

