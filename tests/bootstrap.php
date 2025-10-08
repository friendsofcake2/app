<?php
/**
 * Bootstrap for PHPUnit
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));
define('VENDORS', ROOT . DS . 'vendor' . DS);

require_once 'vendor' . DS . 'pieceofcake2' . DS . 'cakephp' . DS . 'tests' . DS . 'bootstrap.php';
