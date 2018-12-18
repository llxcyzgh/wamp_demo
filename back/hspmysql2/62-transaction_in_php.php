<?php
header("content-type:text/html;charset=utf-8");
// 在php程序中实现事务
/*
实例:
use dbtemp;
create table account(id int unsigned primary key,name varchar(30) not null,balance decimal(20,2))engine=innodb charset=utf8;
insert into account values(100,'宋江',100);
insert into account values(101,'吴用',80000);
 */
$conn = @mysql_connect('localhost', 'root');
if (!$conn) {
    die('连接失败 ' . mysql_error());
}

mysql_query('set names utf8');

mysql_select_db('dbtemp');

mysql_query('start transaction');

$sql1 = "UPDATE `account` SET balance = balance - 10000 WHERE id = 101";
$sql2 = "UPDATE `account` SET balance = balance + 10000 WHERE id = 100";

$res1 = mysql_query($sql1);
$res2 = mysql_query($sql2);

if ($res1 && $res2) {
    echo 'ok,正式提交...';
    mysql_query('commit');
} else {
    echo '有错误.回退';
    mysql_query('rollback');
}
