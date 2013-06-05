<?php defined('SYSPATH') or die('No direct script access.');
// kohana tutorials :: kohanaframework.blogspot.com
class Javascript {
    private static $files = array();

    public static function add($file)
    {
        self::$files[] = $file;
    }

    public static function get()
    {
        return self::$files;
    }
}