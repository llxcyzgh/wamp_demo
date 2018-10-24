<?php
header("content-type:text/html;charset=utf-8");
/*
用于强制行数据必须满足的条件,假定在sal列上定义了check约束,并要求sal列值在1000～2000之间如果在 1000～2000之间就会提示出错。

oracle 和 sql server 均支持check ,但是mysql目前还不支持check ,只做语法校验，但不会生效。
在mysql中实现check的功能,一般是在程序中控制,或者通过触发器完成

基本语法： 列名    类型    check    (check条件)
user 表
id，name，sex(man,woman)，sal(大于100 小于 900)

create table user8 (
id int primary key,
name varchar(30) not null default '',
sex enum('man','woman'),
sal float check(sal>100 and sal<900));

insert into user8 values(100,'小红','woman',80);
 */
