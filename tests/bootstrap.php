<?php
/**
 * Bootstrap for PHPUnit
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));
define('VENDORS', ROOT . DS . 'vendor' . DS);

require_once 'Cake' . DS . 'Test' . DS . 'bootstrap.php';
