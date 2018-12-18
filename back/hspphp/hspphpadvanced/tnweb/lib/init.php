<?php
header("content-type:text/html;charset=utf-8");
// 这个文件是非常重要的文件,可以完成初始化任务.和文件的引入工作
// 要获取到网站的根目录
//
define('ROOT_PATH', dirname(__DIR__) . '\\');
// echo ROOT_PATH;

// 获取模板的路径
define('TEMPLATE_PATH', ROOT_PATH . 'templates\\');
// echo TEMPLATE_PATH;

// 定义lib的路径
define('LIB_PATH', ROOT_PATH . 'lib\\');
// echo LIB_PATH;
// ...依此类推

// 引入functions.php
require LIB_PATH . 'functions.php';
// require TEMPLATE_PATE . 'myTemp.html';//所有php都用到
