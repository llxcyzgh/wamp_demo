<?php
header("content-type:text/html;charset=utf-8");
/*
字段名 整型 primary key auto_increment
 */
/*
use dbtemp;
create table aut(id int unsigned primary key auto_increment,name varchar(30) not null default '') ;
insert into aut values(null,'abc');
insert into aut values(null,'abcdddd');
insert into aut set name='efg';
insert into aut(name) values('4444');
insert aut(name) values('55555');
insert into aut set id=99,name='000';
 */

/*
1、一般来说自增长是和primary key 配合使用的
2、自增长也可以单独使用[但是需要配合一个unique]
3、自增长修饰的字段为整数型的(虽然小数也可以但是非常非常少这样使用,但也是按1,2,3...增长; 字符串型则不可以)
4、自增长默认从 1开始，你也可以通过如下命令修改
alter table 表名 auto_increment = xxx;
5、也可以直接给increment的字段赋值,而不让它自增长
 */
