<?php

/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 12.01.2016
 * Time: 17:43
 */
class Session
{
    protected static $flash_message;

    /**
     * @param mixed $message
     */
    public static function setFlash($message)
    {
        self::$flash_message = $message;
    }

    public static function hasFlash()
    {
        return !is_null(self::$flash_message);
    }

    public static function flash()
    {
        echo self::$flash_message;
        self::$flash_message = null;
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public static function delete($key)
    {
        if ( isset($_SESSION[$key]) )
        {
            unset($_SESSION[$key]);
        }
    }

    public static function destroy()
    {
        session_destroy();
    }
}