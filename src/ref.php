<?php
	session_start();
	function getCurrentPage(){
			$page_url = 'http';
			if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'){
					$page_url .= 's';
			}
			return $page_url.'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	}

	if(isset($_SESSION['referrer'])) $referrer_url = $_SESSION['referrer'];
	elseif(isset($_SERVER['HTTP_REFERER'])) $referrer_url = $_SERVER['HTTP_REFERER'];
	else $referrer_url = "";

	$referrer_page = null;

	// Parse page referrer.
	function setPageReferrerFileName()	{
		global $referrer_page, $referrer_url;
		$parsed_url = parse_url($referrer_url);
		$page_path = $parsed_url['path'];
		$idx = strrpos($page_path, '/');
		if ($idx === false)	{
			$referrer_page = null;
		} else {
			$referrer_page = substr($page_path, $idx+1, strlen($page_path)-$idx);
		}
	}
	setPageReferrerFileName(); // An ugly way to encapsulate local variables... :p

	$_SESSION['referrer'] = getCurrentPage();
	session_destroy();
?>
