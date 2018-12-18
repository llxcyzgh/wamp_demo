<?php
header("content-type:text/html;charset=utf-8");
require_once '58-require_or_include_path.php';
sayHello();
/*
require_once 的细节说明:
1.当require_once的文件,不存在,则直接退出
2.当require_once的文件,会判断是否已经引入过,不会重复引入,这样可以防止引入时,出现函数重复定义的问题,而且有利于性能提高,推荐使用
 */
