<?php
header("Content-type:text/html;charset=utf-8");
/*
练习: 能够通过php程序添加时间,并且可以在php页面也按 '年-月-日 时:分:秒' 形式显示在页面 date_default_timezone_set
 */
// 操作数据库,并显示正确的日期格式
$conn = @mysql_connect('localhost', 'root');
if (!$conn) {
    die('未能连接数据库<br>' . mysql_error());
}

// 设置编码
mysql_query('set names utf8');

// 选择数据库
mysql_select_db('db100');

// 在php程序中,获取当前时间戳
$now_time = time();
$sql      = "INSERT INTO `mymes` VALUES(2,'HELLO2',$now_time)";

$res = mysql_query($sql);
echo $res;
