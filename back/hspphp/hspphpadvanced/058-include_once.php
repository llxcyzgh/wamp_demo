<?php
header("content-type:text/html;charset=utf-8");
include_once '58-require_or_include_path.php';
sayHello();

/*
include_once 的细节说明
1.当include的文件不存在,不会退出,会继续执行
2.当include_once 文件时,会判断是否已经引入过,不会重复引入
 */

// 推荐使用 require 或者 require_once
