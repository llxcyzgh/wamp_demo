<?php
header("content-type:text/html;charset=utf-8");
// 字符串运算符,优先级和 +,- 一样
$str1 = 'abc';
// $str2 = 'hello';
$str2 = 1234;
$str3 = $str1 . $str2;
echo $str3;
$str3 .= 'yyy';
echo $str3;
