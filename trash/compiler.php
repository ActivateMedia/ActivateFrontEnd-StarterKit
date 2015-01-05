<?php
if(!isset($config)) {
	include("config.php");
}
exec('lessc -x '.$config->less_compiler->less_file.' > '.$config->less_compiler->css_file, $output, $rc);
?>
