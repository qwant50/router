<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 1/8/16
 * Time: 4:21 PM
 */

require_once  realpath(__DIR__) . DIRECTORY_SEPARATOR .DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.'config.php';


$router = new Router();  // default page

$template = new Template(DIR_TO_PAGES);

echo $template->render($router->page);
