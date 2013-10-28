<?php
	if (!isset($page_title)) $page_title = "";
	if (!isset($css_file)) $css_file = array();
	else if (!is_array($css_file)) $css_file = [ $css_file ];
	if (!isset($js_file)) $js_file = array();
	else if (!is_array($js_file)) $js_file = [ $js_file ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
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
	<div id="popuplayer"></div>
	<?php include_once('core_begin.php'); ?>
