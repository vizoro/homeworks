<?php

/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 13.01.2016
 * Time: 0:08
 */
class User extends Model
{
    public function getByLogin($login)
    {
        $login = $this->db->escape($login);
        $sql = "select * from users where login = '{$login}' limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
}