<?php

/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 12.01.2016
 * Time: 16:48
 */
class Model
{
    protected $db;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->db = App::$db;
    }

}