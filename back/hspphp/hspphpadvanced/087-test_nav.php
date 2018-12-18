<?php
header("content-type:text/html;charset=utf-8");
// nav.php
// 查询数据库,获取到导航栏目,这里用数组代替
$nav_list = array('首页', '程序员', '论坛', '问答');
// 引入模板
require '087-test_temp.html';
