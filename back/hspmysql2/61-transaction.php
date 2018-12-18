<?php
header("content-type:text/html;charset=utf-8");
/*
mysql 数据库控制台事务的几个重要操作(基本操作)
0) start transaction  //开始一个事务
1) savepoint 保存点名 //设置保存点
2) rollback to 保存点名 //取消部分事务
3) rollback //取消全部事务
4) commit //提交事务.

 */

/*
事务使用细节:
1、没有设置保存点
2、多个保存点
3、存储引擎
4、开始事务方式
 */

/*
实例:
use dbtemp;
create table account(id int unsigned primary key,name varchar(30) not null,balance decimal(20,2))engine=innodb charset=utf8;
insert into account values(100,'宋江',100);
insert into account values(101,'吴用',80000);

start transaction;
// set autocommit = false;
// begin
delete from account where id=100;
savepoint aaa;
delete from account where id=101;
savepoint bbb;
rollback to bbb;
rollback to aaa;
rollback;
commit;

注意:
回滚只能向前,向前后不能再向后回滚
比如rollback到最初了,就不能再到bbb和aaa了;  回滚到aaa,就不能再到bbb了
 */
