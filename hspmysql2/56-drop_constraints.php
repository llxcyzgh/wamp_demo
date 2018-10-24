<?php
header("content-type:text/html;charset=utf-8");
/*
■ 删除约束
当不再需要某个约束时，可以删除.
alter table 表名 drop {index|key} 约束名称;

在删除主键约束的时候，可能有错误,比如：
alter table 表名 drop primary key

这是因为有另外一张表的外键指向该主键，所以需要先删除指向该主键的外键，然后再删除该主键。
删除外键:
alter table 表名 drop foreign key fk_name

 */
/*
use dbtemp;
create table temp1(id int primary key,name varchar(40) not null);
create table temp2(id int,name varchar(40) not null,foreign key(id) references temp1(id));

1、删除主键
如果有外键指向主键,则需要先删除外键,然后才能删除主键
要删除外键,需要先获取到外键名(constraint symbol),通过show create table temp2 获得,或者在创建外键的时候就指定constraint symbol
alter table temp2 drop foreign key temp2_ibfk_1;
alter table temp1 drop primary key;

2、删除unique
use dbtemp;
create table temp3(id int,name varchar(30) not null unique);
删除unique格式为 alter table tb_name  DROP INDEX index_name;
这里的unique当成index,字段名即为 index_name
alter table temp3 drop index name;

3、删除not null
alter table temp3 modify name varchar(30);
 */
