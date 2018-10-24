<?php
header("content-type:text/html;charset=utf-8");
/*
USER()                查询当前用户
DATABASE()            数据库名称
MD5(str)              为字符串算出一个 MD5 (32位字符串,不可逆)128比特检查和,通常用于对应用程序使用到的表的某个字段(比如用户密码)加密
PASSWORD(str)          可以对mysql用户进行加密,即这个也是一个加密函数.从原文密码str 计算并返回密码字符串,通常用于对mysql数据库的用户密码加密
select * from mysql.user \G         其中 mysql 是数据库的名字,/G 指纵向显示数据

 */

/*
create table usersss(id int,name varchar(30),pwd char(32));
insert into usersss values(100,'zs',md5('123'));
select * from usersss;
 */
