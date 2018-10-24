<?php

namespace framework\model;
class Model
{
    protected $dao;

    public function __construct()
    {
        $option = array(
            'host' => 'localhost',
            'user' => 'root',
            'pwd' => '',
            'dbname' => 'tndb',
            'port' => 3306,
            'charset' => 'utf8',
        );
        $this->dao = DAOPDO::getSingleton($option);
    }
}