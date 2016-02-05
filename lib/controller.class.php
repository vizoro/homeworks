<?php

/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 11.01.2016
 * Time: 17:34
 */
class Controller
{
    protected $data;
    protected $model;
    protected $params;

    /**
     * Controller constructor.
     * @param $data
    */

    public function __construct($data = array())
    {
        $this->data = $data;
        $this->params = App::getRouter()->getParams();

    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

}