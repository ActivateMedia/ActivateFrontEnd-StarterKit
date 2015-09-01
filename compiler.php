<?php

$rc = null;
$rc_js = null;

if(!isset($config))
{
	include("config.php");
}

if(isset($config->compile_less) && isset($config->rebuild))
{
	if($config->compile_less || $config->rebuild)
	{
		exec('lessc -x '.$config->less_compiler->less_file.' '.$config->less_compiler->css_file, $output, $rc);
	}
}

if(isset($config->rebuild))
{
	if($config->rebuild)
	{
		$uglifyjs = array('parameters'	=>	'--compress --maple --output',
						  'output'	=>	'js/scripts.min.js',
						  'input'	=>	array('js/libs/jquery.min.js',
        											  'js/libs/jquery.lazyload.js',
        											  'js/functions.js',
        											  //'less/bootstrap-3.3.2/js/tooltip.js',
        											  'less/bootstrap-3.3.2/js/affix.js',
        											  //'less/bootstrap-3.3.2/js/alert.js',
        											  'less/bootstrap-3.3.2/js/button.js',
        											  'less/bootstrap-3.3.2/js/carousel.js',
        											  'less/bootstrap-3.3.2/js/collapse.js',
        											  //'less/bootstrap-3.3.2/js/dropdown.js',
        											  //'less/bootstrap-3.3.2/js/modal.js',
        											  //'less/bootstrap-3.3.2/js/popover.js',
        											  'less/bootstrap-3.3.2/js/scrollspy.js',
        											  //'less/bootstrap-3.3.2/js/tab.js',
        											  'less/bootstrap-3.3.2/js/transition.js'
        											 ));
	
		exec('uglifyjs '.$uglifyjs['parameters'].' '.$uglifyjs['output'].' '.implode(' ', $uglifyjs['input']).'  2>&1', $output_js, $rc_js);
	}
}

?>