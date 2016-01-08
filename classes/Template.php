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
    public $layout ='';
    public $dir_phtml = '';

    public function __construct($dir_phtml) {
        $this->dir_phtml = $dir_phtml;
    }

    public function getContent() {
        if (isset($_GET['page'])) {
            $page = trim($_GET['page']);
            if (file_exists($this->dir_phtml. $page.'.phtml')) {
                ob_start();
                require_once $this->dir_phtml. $page. '.phtml';
                $this->content = ob_get_contents();
                ob_end_clean();

                ob_start();
                require_once  $this->dir_phtml. 'layouts'. DIRECTORY_SEPARATOR. 'default.phtml';
                $this->layout = ob_get_contents();
                ob_end_clean();
                return $this->layout;
            }
        }
        else require_once $this->dir_phtml. 'error404.phtml';
    }

}