<?php

if (!defined('ROOT')) {
    define('ROOT', dirname(__DIR__));
}

if (!defined('APP_DIR')) {
    define('APP_DIR', 'src');
}

if (!defined('APP')) {
    define('APP', ROOT . DS . APP_DIR . DS);
}

if (!defined('CONFIG')) {
    define('CONFIG', ROOT . DS . 'config' . DS);
}

if (!defined('WEBROOT_DIR')) {
    define('WEBROOT_DIR', 'webroot');
}

if (!defined('WWW_ROOT')) {
    define('WWW_ROOT', ROOT . DS . WEBROOT_DIR . DS);
}

if (!defined('TESTS')) {
    define('TESTS', ROOT . DS . 'tests' . DS);
}

if (!defined('TMP')) {
    define('TMP', ROOT . DS . 'tmp' . DS);
}

if (!defined('LOGS')) {
    define('LOGS', ROOT . DS . 'logs' . DS);
}

if (!defined('VENDORS')) {
    define('VENDORS', ROOT . DS . 'vendor' . DS);
}
