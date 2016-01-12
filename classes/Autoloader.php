<?php

/**
 * Created by PhpStorm.
 * User: Qwant
 * Date: 11-Jan-16
 * Time: 18:56
 */
Class Autoloader
{
    protected static $prefix = '';  // progect's prefix

    public static function myAutoload($class)
    {
        $len = strlen(self::$prefix);
        if (strncmp(self::$prefix, $class, $len) !== 0) return; // Progect's prefix detector
        $relative_class = substr($class, $len); // Get class name
        $fileName = DIR_TO_CLASSES . str_replace('\\', DIRECTORY_SEPARATOR, $relative_class) . ".php";

        if (file_exists($fileName)) {
            require_once $fileName;
        };
    }
}