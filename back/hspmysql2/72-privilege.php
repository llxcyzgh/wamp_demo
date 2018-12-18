<?php
header("content-type:text/html;charset=utf-8");
/*
■ 给用户授权

基本语法：
grant  权限列表   on  库.对象名  to  ‘用户名’@’登录位置’  【identified  by  ‘密码’】
说明：

1、权限列表，多个权限用逗号分开
grant  select  on .......
grant  select,  delete,  create  on ......
grant  all 【privileges】  on .....    //表示赋予该用户在该对象上的所有权限

2、特别说明
 *.*  ：代表本系统中的所有数据库的所有对象(表，视图，存储过程)
库.* ：表示某个数据库中的所有数据对象(表，视图，存储过程等)

3、identified  by可以省略，也可以写出.
(1)如果用户存在，就是修改该用户的密码。
(2)如果该用户不存在，就是创建该用户， 并赋给权限！
 */

/*
■ 回收用户授权
基本语法:
revoke 权限列表  on  库.对象名  from  '用户名"@"登录位置'；
 */

/*
■ 权限生效指令
基本语法:
FLUSH PRIVILEGES;
 */

/*
■ 查看某个用户的权限
show grants for 'root'@'localhost';
 */

/*
细节说明:
1、在创建用户的时候，如果不指定Host, 则为% , %表示表示所有IP都有连接权限
create user  xxx; [在项目开发，一定要避免root 可以远程登录]

2、你也可以这样指定
create user  'xxx'@'192.168.0.%'  表示 xxx用户在 192.168.0.*的ip可以登录mysql

3、在删除用户的时候，如果 host 不是 %, 需要明确指定  '用户'@'host'， 如果host是 %, 则删除用户不需要指定host

 */
