<?php

/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 11.01.2016
 * Time: 20:58
 */
class View
{
    protected $data;
    protected $path;

    protected static function getDefaultView()
    {
        $router = App::getRouter();
        if ( !$router )
        {
            return false;
        }
        $controller_dir = $router->getController();
        $template_name = $router->getMethodPrefix().$router->getAction().'.html';
        return VIEWS_PATH.DS.$controller_dir.DS.$template_name;
    }

    /**
     * View constructor.
     * @param $data
     * @param $path
     */
    public function __construct($data = array(), $path = null)
    {
        if ( !$path )
        {
            $path = self::getDefaultView();
        }
        if ( !file_exists($path) )
        {
            throw new Exception('Template file is not found in path '.$path);
        }
        $this->path = $path;
        $this->data = $data;
    }

    public function render()
    {
        $data = $this->data;

        ob_start();
        include($this->path);
        $content = ob_get_clean();

        return $content;
    }

}