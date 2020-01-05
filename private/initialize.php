<?php

// Assign file paths to PHP constants
// __FILE__ returns the current paht to this file
// dirname() returns the path to the parent directory

define("PRIVATE_PATH", dirname(__FILE__));
define('PROJECT_PATH', dirname(PRIVATE_PATH));
define('PUBLIC_PATH', PROJECT_PATH . '/public');
define('SHARED_PATH', PRIVATE_PATH . '/shared');


$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define('WWW_ROOT', $doc_root);

require_once('functions.php');
