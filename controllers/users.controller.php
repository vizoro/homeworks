<?php

/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 13.01.2016
 * Time: 0:06
 */
class UsersController extends Controller
{
    /**
     * UsersController constructor.
     */
    public function __construct($data = array())
    {
        parent::__construct();
        $this->model = new User();
    }

    public function admin_login()
    {
        if ( $_POST && isset($_POST['login']) && isset($_POST['password']))
        {
            $user = $this->model->getByLogin($_POST['login']);
            $hash = md5(Config::get('salt').$_POST['password']);
            if ( $user && $user['is_active'] && $hash == $user['password'])
            {
                Session::set('login',$user['login']);
                Session::set('role',$user['role']);
            }
            Router::redirect('/admin/');
}
    }

    public function admin_logout()
    {
        Session::destroy();
        Router::redirect('/admin/');
    }
}