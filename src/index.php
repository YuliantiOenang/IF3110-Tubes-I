<?php
//Document path
define('SERVER_ROOT' , getcwd()."/");
define('SITE_ROOT' , 'http://'.$_SERVER['SERVER_NAME'].'/'); 
define('NAME_ROOT' , 'wbdf'); //ganti ini apabila foldernya bukan 'wbdf'

//Konfigurasi database
define('HOST_SQL','localhost');
define('USER_SQL','root');
define('PASS_SQL','tkislam123');

//router, penghubung MVC
require_once(SERVER_ROOT.'/router.php');
