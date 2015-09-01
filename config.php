<?php

/* Front End Platform Configuration */

unset($config);
$config = new stdClass();

/* Edit from here ================================================== */

$config->title = "Sitename - Brand";
$config->metadata = array("description" => "",
						  "keywords" => "",
						  "author" => "");
$config->subscribe_link = "";
$config->questionnaire_link = "";

$config->navigation = array(0 => array("title" => "Item1", "link" => "index.php"),
							1 => array("title" => "Item2", "link" => "http://google.co.uk"),
							2 => array("title" => "Item3", "link" => "faq.php"));
							

$config->compile_less = false;
$config->rebuild = false;
$config->less_compiler->less_file = "less/style.less";
$config->less_compiler->css_file = "style.min.css";

$config->display_php_errors = true;

/* Stop editing ================================================== */

if($config->display_php_errors) {
	error_reporting(-1);
	ini_set('display_errors', 'On');
}

$params = array();
$tmp_value = null;

if(isset($_GET["rebuild"]) && isset($_GET["rebuild"]))
{
	
	$tmp_value = (int) $_GET["rebuild"];
	
	if($tmp_value == 1)
	{	
		$config->rebuild = true;	
	}
}

function get_current_url($strip = true) {
    // filter function
    $filter = function($input, $strip) {
        $input = urldecode($input);
        $input = str_ireplace(array("\0", '%00', "\x0a", '%0a', "\x1a", '%1a'), '', $input);
        if ($strip) {
            $input = strip_tags($input);
        }
        $input = htmlentities($input, ENT_QUOTES, 'UTF-8'); // or whatever encoding you use...
        return trim($input);
    };

    $url = array();
    // set protocol
    $url['protocol'] = 'http://';
    if (isset($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) === 'on' || $_SERVER['HTTPS'] == 1)) {
        $url['protocol'] = 'https://';
    } elseif (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) {
        $url['protocol'] = 'https://';
    }
    // set host
    $url['host'] = $_SERVER['HTTP_HOST'];
    // set request uri in a secure way
    $url['request_uri'] = $filter($_SERVER['REQUEST_URI'], $strip);

    return join('', $url);
}