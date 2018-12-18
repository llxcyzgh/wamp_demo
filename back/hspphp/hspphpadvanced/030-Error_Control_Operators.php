<?php
header("content-type:text/html;charset=utf-8");
// 错误控制运算符
// 在php的表达式前,加上 @ ,可以忽略错误提示
// @一般来讲,可以和die 配合使用,从而可以忽略一些不致命错误,提示致命错误

// $con = mysql_connect('localhost', 'root');
// @$con = mysql_connect('localhost', 'root');
$con = @mysql_connect('localhost', 'root') or die(mysql_error());
if ($con) {
    echo 'ok';
} else {
    echo 'error';
}
