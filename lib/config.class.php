<?php

/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 11.01.2016
 * Time: 15:42
 */
class Config
{
    protected static $settings = array();

    public static function get($key)
    {
        return isset(self::$settings[$key]) ? self::$settings[$key]: null;
    }

    public static function set($key, $value)
    {
        self::$settings[$key] = $value;
    }
}