<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 1/8/16
 * Time: 4:21 PM
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

define ('__ROOT__', realpath(__DIR__). DIRECTORY_SEPARATOR);
$dir_phtml = __ROOT__ . '..' . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR;

require_once  __ROOT__ . '..' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR. 'Template.php';

$blabla = new Template($dir_phtml);
echo $blabla->getContent();

