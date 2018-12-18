<?php
header("content-type:text/html;charset=utf-8");
// 第一种方式
require '58-require_or_include_path.php';
require '58-require_or_include_path.php';

// 第二种方式
// require后的内容也可以用小括号括起来,如: require ('58-require_or_include_path.php');

// 第三种方式
/*$inc_file = '58-require_or_include_path.php';
require $inc_file;*/

sayHello();

/*
require 与 require_once 的差别
 */

/*
require 的细节说明:
1.当require的文件,不存在,则直接退出
2.当require的文件,不会判断是否已经引入过,而是会重复引入,[如果里面是函数就报错,不是函数就不报错,直接执行]
 */
