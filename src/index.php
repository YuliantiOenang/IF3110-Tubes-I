<?php
include("templates/header.htm");
if (!empty($_GET['page']))
{
	$page = $_GET['page'];
	$page = basename($page,".htm");
	//jika page tidak ditemukan ATAU header/footer diakses
	if(($page == 'header') || ($page == 'footer') || (!file_exists("htm/$page.htm")))
	{
		$page = "index";
	}
	include("htm/$page.htm");
}
else
{
	//default page
	include("htm/index.htm");
}
include("templates/footer.htm");
?>