<?php

require SITEPATH . '/framework/' . 'base_controller.class.php';
require SITEPATH . '/framework/' . 'registry.class.php';
require SITEPATH . '/framework/' . 'router.class.php';
require SITEPATH . '/framework/' . 'template.class.php';

//autoload class model
function __autoload($class_name) {
    $filename = strtolower($class_name) . '.class.php';
    $file = SITEPATH . '/app/model/' . $filename;
 	require ($file);
}

//create new registry
$registry = new Registry;
//create database registry
//$registry->db = db::getInstance();
