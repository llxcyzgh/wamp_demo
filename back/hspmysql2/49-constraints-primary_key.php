<?php
header("content-type:text/html;charset=utf-8");
/*
约束用于确保数据库数据满足特定的商业规则。
在mysql中，约束包括: 主键(primary key)、not null(非空)、unique(唯一约束)、外键约束(foreign key)、check约束[在mysql中,支持check的语法,但是本身并不生效]
not null, unique,
primary key, foreign key, check 五种.
 */

/*
primary key
字段名 字段类型 primary key
用于唯一标示表行的数据,当定义主键约束后，该列不能重复,不能null.
一般来说,mysql中的每张表都会有一个primary key,用于唯一标识一条记录.
字段类型可以是 int ,也可以是字符串,一般是int

 */

/*
test

create table user1(id int primary key,name varchar(30));
insert into usr1 values(100,'aaa');
insert into usr1 values(100,'bbb'); //报错

复合主键
create table user2(id int,name varchar(30),eamil varchar(30),primary key(id,name));
 */

/*
■ primary key(主键)-细节说明

1、primary key不但不能重复而且不能为null。
2、一张表最多只能有一个主键, 但可以是复合主键
3、一般来说一张表总有primary key ,而且是整数类型的(ecs_vote、ecs_users、ecs_goods等等)
4、主键的指定方式 有两种
.    直接在字段名后指定：字段名  primakry key
.    在表定义最后写 primary key(列名);
5、如果一个字段 设置成  not null 并 unique ，从使用效果上非常像primary key
6、使用desc 表名，可以看到primary key的情况.

 */
