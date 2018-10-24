<?php
header("content-type:text/html;charset=utf-8");

// mysql 数据类型
/*
整型 tinyint smallint mediumint int  bigint

细节说明：
1、在mysql中，整型可以指定为有符号的，或者无符号的，默认是有符号的

2、可以指定整型是有符号还是无符号 （unsigned）
.    create table tt1 (num tinyint);// 默认有符号
.    create table tt2 (num tinyint signed);// 有符号
.    create table tt3 (num tinyint unsigned);// 无符号

3、在定义一个字段时，可以指定 not null，并default 0
也就是不能为空，默认为0。也就是
insert into tt4 values(); // 填为0
insert into tt4 values(null); // 报错
.    create table tt4 (id int unsigned not null default 0)

4、zerofill
4.1 zerofill 只能和 unsigned 配合使用
4.2 int(6) unsigned zerofill 中的6，表示填充的宽度，若数据不足6位时，这个位置将被0填充。如果没有设置zerofill，则这个6没有什么含义
4.3 int(6) zerofill 只要指定zerofill，则默认就是unsigned
4.4 6并不是表示，存放的数不能超过6位（宽度）
 */

/*
练习：
create table test(num1 int,num2 int(4) zerofill,num3 int(6) unsigned zerofill);
insert into test values(123,123,123);
insert into test values(12345,12345,12345);
insert into test values(-123,-123,-123);
 */
