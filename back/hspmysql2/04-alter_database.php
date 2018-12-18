<?php
header("content-type:text/html;charset=utf-8");
/*
修改数据库 ALTER
alter database [if exist] db_name

[default] character set charset_name
[default] collate collation_name

说明：
1、对数据库的修改主要指的是它的字符集（chracter set）和校验规则（collate）
 */

/*
练习：
查看服务器中的数据库，并把其中某一个库的字符集修改为utf8
alter database db2 character set uft8;
或
alter database db2 charset=uft8;
 */
/*

 */
