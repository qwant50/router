<?php

/**
 * Created by PhpStorm.
 * User: Qwant
 * Date: 11-Jan-16
 * Time: 18:56
 */
Class Autoloader
{
    protected static $prefix = 'A\\B\\';

    public static function myAutoload($class)
    {
        $len = strlen(self::$prefix);
        if (strncmp(self::$prefix, $class, $len) !== 0) return; //Other prefix
        $className = substr($class, $len); // Get class name
        var_dump($className);
        $prefixNamespace = explode('\\', $class);
        $fileName = DIR_TO_CLASSES . $className . ".php";
        if (file_exists($fileName)) {
            require_once $fileName;
        };
    }

}