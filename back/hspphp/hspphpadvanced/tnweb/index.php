<?php
require '.\\lib\\init.php';
$res = getSum(100, 900);
echo 'res = ' . $res;

//这里查询数据库,获取了网站有3个栏目[模拟数据]
$nav = array('首页', '关于我们', '问答中心');

// 在index.php 中引入html模版
require_once TEMPLATE_PATH . 'myTemp.html';

/*
网站结构示意图
--tnweb网站名称
----css文件夹
--------css文件
----js
--------js代码和jquery
----images
--------图片
----templates
--------myTemp.html
----lib文件夹
--------functions.php(函数库)
--------init.php
----index.php 入口文件
 */
