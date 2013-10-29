<?php
include("templates/header.htm");
if (!empty($_GET['page']))
{
	$page = $_GET['page'];
	$page = basename($page);
	//jika page tidak ditemukan ATAU header/footer diakses
	if(($page == 'header') || ($page == 'footer') || (!file_exists("$page.php")))
	{
		$page = "index";
	}
	include("$page.php");
}
else
{
	//default page
	include("htm/index.htm");
}
include("templates/footer.htm");
?>