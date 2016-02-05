<?php

/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 12.01.2016
 * Time: 15:16
 */
class ContactsController extends Controller
{

    /**
     * ContactsController constructor.
     */
    public function __construct($data = array())
    {
        parent::__construct();
        $this->model = new Message();
    }

    public function index()
    {
        if ( $_POST )
        {
            if ( $this->model->save($_POST) )
            {
                Session::setFlash('Thank you! Your message was sent successfully!');
            }
        }
    }

    public function admin_index()
    {
        $this->data = $this->model->getList();
    }
}