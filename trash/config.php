<?php

/* Front End Platform Configuration */

unset($config);
$config = new stdClass();

/* Edit from here ================================================== */

$config->title = "Website Title";

$config->less_compiler->less_file = "less/style.less";
$config->less_compiler->css_file = "style.css";

$config->display_php_errors = true;

/* Stop editing ================================================== */

if($config->display_php_errors) {
	error_reporting(-1);
	ini_set('display_errors', 'On');
}