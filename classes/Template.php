<?php

/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 1/8/16
 * Time: 5:41 PM
 */



class Template
{
    public $content = '';
    public $dir_phtml = '';

    public function __construct($dir_phtml) {
        $this->dir_phtml = $dir_phtml;
    }

    public function render($page)
    {

        ob_start();
        require_once $this->dir_phtml . $page . TEMPLATE_EXTENSION;
        $this->content = ob_get_clean();

        require_once $this->dir_phtml . 'layouts' . DIRECTORY_SEPARATOR . 'default' . TEMPLATE_EXTENSION;
        return ob_get_clean();

    }

}