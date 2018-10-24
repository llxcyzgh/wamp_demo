<?php
header("content-type:text/html;charset=utf-8");
/*
delete 删除表中的记录
DELETE FROM table_name [WHERE where_definition];

 */

/*
练习:
删除表中名称为'zs'的记录;
删除表中所有记录(表的结构还在);
使用truncate删除表中记录

delete from employee2 where name='小杨';
delete from employee2;
truncate table employee2;(删除表的所有记录)
 */

/*
delete 和 truncate 删除表格的区别?
1、如果要清空表中的所有记录,可以使用delete 或truncate
DELETE FROM table_name;
TRUNCATE TABLE table_name;
2、效果一样,truncate速度快
3、delete可以带where条件,删除更加灵活(可以删除表中某行,或某些行的记录,而不是全部记录)
4、delete可以返回被删除的记录数,而truncate table 返回的是0
5、推荐使用delete
 */

/*
delete使用细节说明:
1、如果不使用where语句,将删除表中的所有数据[!!小心!!];
2、delete语句不能删除某一列的值(可以使用update设为null或'');
3、使用delete语句仅删除记录,不删除表本身.如果要删除整个表,使用drop table 语句;
4、同insert和update一样,从一个表中删除记录将引起其它表的参照完整性问题,在修改数据库时,头脑中应该始终不要忘记这个潜在的问题(外键)
 */

/*
ps:技巧:
在练习删除时,可以复制一份表用于练习.
把employee复制到employee2
1、创建字段和employee一样的表employee2(没有数据)
create table employee2 like employee;
2、把employee中的数据完全插入(复制)到employee2中
insert into employee2 select * from employee;
 */
