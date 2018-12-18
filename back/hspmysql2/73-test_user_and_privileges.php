<?php
header("content-type:text/html;charset=utf-8");
/*
用户管理练习题

1.    创建一个用户（你的名字，拼音），密码 123, 并且只可以从本地登录，不让远程登录mysql
2.    创建库和表 testdb 下的 news 表
3.    给用户分配查看 news 表和添加数据的权限
4.    测试看看用户是否只有这几个权限
5.    修改密码为abc
6.    重新登录
7.    使用 root 用户删除你的用户
 */

/*
-- root用户cmd下
CREATE USER 'zhu'@'localhost' identified by '123';
CREATE DATABASE `testdb` CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE TABLE news(id int unsigned,name varchar(30),content text)engine=myisam charset=utf8;
GRANT SELECT,UPDATE on testdb.news TO 'zhu'@'localhost';
FLUSH PRIVILEGES;
SHOW GRANTS FOR 'zhu'@'localhost';

-- zhu用户cmd下
mysql -u zhu-p 123
SET PASSWORD = PASSWORD('abc');
EXIT;
mysql -u zhu -p abc

--root用户下cmd
DROP USER 'zhu'@'localhost';

 */
