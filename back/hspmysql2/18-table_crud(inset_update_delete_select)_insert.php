<?php
header("content-type:text/html;charset=utf-8");
// 对数据表的操作 增删改查
// insert

/*
练习:
创建一张商品表(有 id int,goods_name varchar(50),price float);

CREATE TABLE `goods` (id int unsigned not null default 0 comment '商品编号',goods_name varchar(50) not null default '' comment '商品名称',price float unsigned not null default 0.0 comment '商品价格') CHARSET=UTF8 engine=MYIsam;
 */
// alter table `goods` modify price float not null default 0.0 comment '商品价格';

/*
INSERT INTO `goods` VALUES(100,'雪碧饮料',4.50);
INSERT INTO `goods` VALUES(101,'可口可乐',5.50);

 */

/*
insert 插入语句细节
1、插入的数据应与字段的数据类型相同
.    比如把'abc'添加到int类型就会错误
2、数据的大小应在列的规定范围内
.    例如不能将一个长度为80的字符串加入到长度为40的列中
3、在values中列出的数据位置必须与被加入的列的排列位置相对应
4、字符和日期型数据应包含在单引号中
5、插入空值[前提是该字段允许为空]的方法,不指定或insert into table values(null);
6、insert into (),(),() 形式添加多条记录
7、如果是给表中的所有字段加数据,可以不写前面的字段名称
8、默认值的使用,当不给某个字段值时,如果有默认值就会添加,否则报错
9、建议以后添加数据(不论是字符串/日期/还是数值型),都用''引起来

 */
