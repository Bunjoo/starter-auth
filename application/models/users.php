<?php
/**
 * Created by PhpStorm.
 * User: Amanda X
 * Date: 2016-03-23
 * Time: 11:09 AM
 */

class Users extends MY_Model{

    public function __contruct(){
        parent:: __construct('users','id');
    }
}