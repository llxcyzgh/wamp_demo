<?php
// 框架的配置文件
return array(
    // 数据库的配置信息
    'host'               => 'localhost',
    'user'               => 'root',
    'password'           => '',
    'dbname'             => 'ask',
    'port'               => 3306,
    'charset'            => 'utf8',
    'table_prefix'       => 'ask_',

    // smarty的配置
    'left_delimiter'     => '<{',
    'rightt_delimiter'   => '}>',

    // 默认的模块(前台、后台)
    'default_module'     => 'home',

    // 默认的控制器(IndexController)
    'default_controller' => 'Index',

    // 默认的方法(indexAction)
    'default_action'     => 'indexAction'
);