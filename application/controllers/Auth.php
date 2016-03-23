<?php
/**
 * Created by PhpStorm.
 * User: Amanda X
 * Date: 2016-03-23
 * Time: 10:47 AM
 */
class Auth extends Application{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    function index(){
        $this->data['pagebody'] = 'login';
        $this->render();
    }
    
}