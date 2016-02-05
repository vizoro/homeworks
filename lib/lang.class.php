<?php

/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 11.01.2016
 * Time: 22:07
 */
class Lang
{
    protected static $data;

    public static function load($lang_code)
    {
        $lang_file_path = ROOT.DS.'lang'.DS.strtolower($lang_code).'.php';

        if ( file_exists($lang_file_path) )
        {
            self::$data = include($lang_file_path);
        }
        else
        {
            throw new Exception('Lang file not found: '.$lang_file_path);
        }
    }

    public static function get($key, $default_value)
    {
        return isset(self::$data[$key]) ? self::$data[strtolower($key)] : $default_value;
    }
}