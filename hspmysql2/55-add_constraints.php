<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/2
 * Time: 22:49
 */
header("content-type:text/html;charset=utf-8");
/*
2、如果在建表时忘记建立必要的约束【见如下sql代码】,则可以在建表后使用alter table命令为表增加约束。
(1)客户号设为的主键；
(2)客户的姓名不能为空值;
(3)电邮不能够重复;【--增加身份证也不重复】
(4)客户的住址默认是'泰牛学生宿舍'

修改约束的格式为:
alter table 表名 add constraint 约束名 约束种类(字段)
 */

/*
use db100;

create table customer2 (
customer_id char(8) not null default '',
name varchar(20),
address varchar(30) not null default '',
email varchar(30) ,
sex enum('男','女') not null
);

alter table customer2 add primary key (customer_id);
alter table customer2 modify name varchar(20) not null default '';
alter table customer2 add unique (email);
ALTER TABLE customer2 ADD card_id VARCHAR(20) UNIQUE ;
ALTER TABLE customer2 MODIFY address VARCHAR(30) NOT NULL DEFAULT '泰牛学生宿舍';
# ALTER TABLE customer2 CHANGE address VARCHAR(30) NOT NULL DEFAULT '泰牛学生宿舍';
 */

//  增加主键或unique 也可以用modify字段来实现
