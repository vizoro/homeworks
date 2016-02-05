<?php

/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 12.01.2016
 * Time: 16:26
 */
class DB
{
    protected $connection;

    /**
     * DB constructor.
     * @param $host
     * @param $login
     * @param $password
     * @param $db_name
     */
    public function __construct($host, $login, $password, $db_name)
    {
        $this->connection = new mysqli($host, $login, $password, $db_name);
         if ( mysqli_connect_error() )
         {
             throw new Exception('Could not connection to DB');
         }
    }

    public function query($sql)
    {
        if ( !$this->connection )
        {
            return false;
        }

        $result = $this->connection->query($sql);
        if ( mysqli_error($this->connection) )
        {
            throw new Exception( mysqli_error($this->connection) );
        }

        if ( is_bool($result) )
        {
            return $result;
        }

        $data = array();
        while ( $row = mysqli_fetch_assoc($result) )
        {
            $data[] = $row;
        }

        return $data;
    }

    public function escape($str)
    {
        return mysqli_escape_string($this->connection, $str);
    }
}