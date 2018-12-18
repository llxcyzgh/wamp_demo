<?php
header("content-type:text/html;charset=utf-8");
/*
mysql中的用户，都存储在系统数据库mysql中 user 表中

其中user表的重要字段说明：
host：    允许登录的“位置”，localhost表示该用户只允许本机登录，可以指定ip地址，比如:192.168.1.100
user：    用户名；
password：密码，是通过mysql的password()函数加密之后的密码。

 */

/*
■ 创建用户

create  user  ‘用户名’@’允许登录位置’  identified  by  ‘密码’
说明：创建用户，同时指定密码
 */

/*
■ 删除用户

drop  user  ‘用户名’@’允许登录位置’ ；
 */

/*
■ 用户修改密码

修改自己的密码：
set password = password('密码')；

修改他人的密码（需要有该权限）：
set password for '用户名'@'登录位置' = password('密码')；
 */
