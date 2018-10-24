<?php
header("content-type:text/html;charset=utf-8");
/*
索引的作用是提供数据的检索/查询速度
索引对我们的添加，修改，删除有影响(降低速度)，但是几乎可以忽略

在mysql中，常见的索引有四种
(1)    主键索引(在字段上创建了主键，该列就是主键索引)
(2)    唯一索引(在字段上创建了unique，该列就是唯一索引)
(3)    普通索引(在某个字段上，使用create index 指令，这个列就是一个普通索引)
(4)    全文索引(用于检索某个字段的关键字，比如查询文章的关键字)

 */

/*
建立索引(主键) 课堂练习
要求:
创建一张订单表order (id号，商品名, 订购人， 数量). 要求id号为主键，请使用三种方式来创建主键.(提示：为练习方便，可以是order1 , order2, order3 )
use dbtemp;
create table order1(id int unsigned primary key,goods_name varchar(30),buyer varchar(30),num int unsigned);
create table order2(id int unsigned,goods_name varchar(30),buyer varchar(30),num int unsigned,primary key(id));
create table order3(id int unsigned,goods_name varchar(30),buyer varchar(30),num int unsigned);
alter table order3 add primary key(id);
 */

/*
建立索引(唯一) 课堂练习
要求:
创建一张特价菜谱表menu (id号，菜谱名, 厨师，点餐人身份证，价格). 要求id号为主键，点餐人身份证是unique 请使用两种方式来创建unique.(提示：为练习方便，可以是menu1 , menu2)
use dbtemp;
create table menu1(id tinyint unsigned primary key,name varchar(30),cook varchar(30),customer_id smallint unsigned unique,price decimal(10,2));
create table menu2(id tinyint unsigned,name varchar(30),cook varchar(30),customer_id smallint unsigned,price decimal(10,2),primary key(id),unique key(customer_id));
 */

/*
建立索引(普通) 课堂练习
要求:
创建一张运动员表sportman  (id号，名字,  特长). 要求id号为主键，名字为普通索引， 请使用三种方式来创建索引(提示：为练习方便，可以是sportman1 , sportman2，sportman3
use dbtemp;
create table sportman1(id mediumint unsigned primary key,name varchar(30),speciality varchar(100),index(name));
create table sportman2(id mediumint unsigned primary key,name varchar(30),speciality varchar(100));
alter table sportman2 add index(name);
create table sportman3(id mediumint unsigned primary key,name varchar(30),speciality varchar(100));
create index inx_name on sportman3(name);
 */

/*
全文索引 fulltext

CREATE TABLE articles (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(200),
body TEXT,
FULLTEXT (title,body)
);

INSERT INTO articles (title,body) VALUES
('MySQL Tutorial','DBMS stands for DataBase ...'),
('How To Use MySQL Well','After you went through a ...'),
('Optimizing MySQL','In this tutorial we will show ...'),
('1001 MySQL Tricks','1. Never run mysqld as root. 2. ...'),
('MySQL vs. YourSQL','In the following database comparison ...'),
('MySQL Security','When configured properly, MySQL ...');

SELECT * FROM articles WHERE MATCH (title,body) AGAINST ('database');

 */

/*
全文索引的: 停止词,  匹配概率
1、针对特别普通的词，就可能是停止词(如 a)
2、mysql的全文检索是安装概率来检索
 */
