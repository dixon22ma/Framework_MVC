<?php
set_error_handler('myErrorHandler');
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('html_errors', 1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'application' . DS);

require_once APP_PATH . 'Config.php';
require_once APP_PATH . 'Request.php';
require_once APP_PATH . 'Bootstrap.php';
require_once APP_PATH . 'Controller.php';
require_once APP_PATH . 'Model.php';
require_once APP_PATH . 'View.php';
require_once APP_PATH . 'Registro.php';
/**/

//echo '<pre>';print_r(get_required_files());
/*
  $r = new Request();
  echo 'Controller: ' . $r->get_controller() . '<br>';
  echo 'Models: ' . $r->get_model() . '<pre>';
  print_r($r->get_args()); */

function myErrorHandler($code, $error, $file = NULL, $line = NULL) {
    throw new Exception($error . ' encontrado en ' . $file . ', línea ' . $line);
}

try {
    Bootstrap::run(new Request());
} catch (Exception $e) {
    echo $e->getMessage().PHP_EOL;
}