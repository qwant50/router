<?php

/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 1/8/16
 * Time: 5:41 PM
 */

namespace A\B;

class Template
{
    public $content = '';
    public $dir_phtml = '';

    public function __construct($dir_phtml) {
        $this->dir_phtml = $dir_phtml;
    }

    public function render() {
        $page = (isset($_GET['page'])) ? trim($_GET['page']) : 'landing';
        if (file_exists($this->dir_phtml. $page.'.phtml')) {
            ob_start();
            require_once $this->dir_phtml. $page. '.phtml';
            $this->content = ob_get_clean();

            require_once  $this->dir_phtml. 'layouts'. DIRECTORY_SEPARATOR. 'default.phtml';
            return ob_get_clean();

        }
        else require_once $this->dir_phtml. 'error404.phtml';

    }

}