<?php
header("content-type:text/html;charset=utf-8");
/*
事务的课堂练习
要求:
1、登录mysql控制客户端A, 创建表 Dog (id, name)， 开始一个事务, 添加两条记录;
2、登录mysql控制客户端B, 开始一个事务，设置为读未提交.
3、A客户端修改Dog 一条记录,不要提交。看看B客户端是否看到变化，说明什么问题?
4、登录mysql客户端C, 开始一个事务，设置为读已提交，这时A客户修改一条记录，不要提交，看看C客户端是否看到变化,说明什么问题?

客户端A
use dbtemp;
create table dog(id int(3) unsigned,name varchar(30))engine=innodb;
insert into dog values(001,'金毛'),(002,'哈士奇');

客户端B
use dbtemp;
start transaction;
set session transaction isolation level read uncommitted;

客户端A
update dog set name='泰迪' where id=001;

客户端B
select * from dog;

客户端C
use dbtemp;
start transaction;
set session transaction isolation level read committed;

客户端A
update dog set name='泰迪xx00' where id=001;
 */
