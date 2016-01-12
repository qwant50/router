<?php

/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 1/8/16
 * Time: 6:23 PM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('__ROOT__', realpath(__DIR__ . DIRECTORY_SEPARATOR . '..') . DIRECTORY_SEPARATOR);
define('DIR_TO_CLASSES', __ROOT__.'classes'.DIRECTORY_SEPARATOR);
define('DIR_TO_PAGES', __ROOT__.'pages'.DIRECTORY_SEPARATOR);
define('TEMPLATE_EXTENSION', '.phtml');

require_once DIR_TO_CLASSES .'Autoloader.php';
spl_autoload_register("Autoloader::myAutoload");

