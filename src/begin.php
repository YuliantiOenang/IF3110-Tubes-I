<?php
	if (!isset($page_title)) $page_title = "";
	if (!isset($css_file)) $css_file = array();
	else if (!is_array($css_file)) $css_file = [ $css_file ];
	if (!isset($js_file)) $js_file = array();
	else if (!is_array($js_file)) $js_file = [ $js_file ];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<script type="text/javascript" src="scripts/global.js"></script>
	<?php
		// Masukkan seluruh file css yang direfer.
		foreach ($css_file as $css_f)	{
			echo '<link rel="stylesheet" type="text/css" href="' . $css_f . '" />';
		}
		// Masukkan seluruh file javascript yang direfer.
		foreach ($js_file as $js_f)	{
			echo '<script type="text/javascript" src="' . $js_f . '"></script>';
		}
	?>
</head>
<body>
	<?php include_once('core_begin.php'); ?>
