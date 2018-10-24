<?php
header("content-type:text/html;charset=utf-8");
/*
■ 自我复制数据(蠕虫复制)
有时，为了对某个sql语句进行效率测试，我们需要海量数据时，可以使用此法为表创建海量数据。

1、新建一个临时表[结构与要测试的表一样,但数据为0]
create table tempemp like emp;
2、给临时表加入数据
// insert into tempemp select * from emp;[全部字段复制]
insert into tempemp (empno,ename,job,hiredate,sal) select empno,ename,job,hiredate,sal from emp;
3、自我复制
insert into tempemp select * from tempemp;
 */

/*
思考题：如何删除掉一张表重复记录
1、创建一个新表
2、在新表中插入非重复的数据
3、删掉原来的表
4、给新表改名
create table temp like tempemp;
insert into temp select distinct * from tempemp;
drop table tempemp;
alter table temp rename to tempemp;
 */
