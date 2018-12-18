<?php
header("content-type:text/html;charset=utf-8");
include '58-require_or_include_path.php';
sayHello();

/*
include 的细节说明
1.当include的文件不存在,不会退出,会继续执行
2.当include文件时,不会判断是否已经引入过,而是会重复引入
 */
