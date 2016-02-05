<?php
/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 11.01.2016
 * Time: 11:28
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT.DS.'views');

require_once(ROOT.DS.'lib'.DS.'init.php');

try {
    session_start();
    App::run($_SERVER['REQUEST_URI']);
}
catch (Exception $e)
{
    echo $e->getMessage();
}
