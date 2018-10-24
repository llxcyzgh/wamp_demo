<?php
header("content-type:text/html;charset=utf-8");
// stdClass php内置标准类
/*
基本介绍: php中有一个类 stdClass, 不需要创建就可以使用, 通常可以使用它来以对象的形式管理数据
 */
$person = new stdClass();
var_dump($person);

$person->name    = '八戒';
$person->ability = '三十六般变化';
var_dump($person);
