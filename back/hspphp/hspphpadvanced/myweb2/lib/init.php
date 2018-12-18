<?php
header("content-type:text/html;charset=utf-8");
// define('ROOT_PATH', __DIR__);//找到的是lib文件夹
define('ROOT_PATH', dirname(__DIR__) . '\\'); //找到lib的父文件夹
// echo ROOT_PATH;
define('LIB_PATH', ROOT_PATH . 'lib\\');
// echo LIB_PATH;
require LIB_PATH . 'myFuns.php';
