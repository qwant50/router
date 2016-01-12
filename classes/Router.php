<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 1/12/16
 * Time: 3:30 PM
 */



class Router
{
    public $page;
    public $controller;

    public function __construct()
    {
        $url = $_SERVER["REQUEST_URI"];
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $file = DIR_TO_PAGES.$url[2].TEMPLATE_EXTENSION;
        (file_exists($file)) ?  $this->page = $url[2] : $this->page = 'error404';
    }
}