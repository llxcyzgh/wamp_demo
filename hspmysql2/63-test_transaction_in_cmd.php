<?php
header("content-type:text/html;charset=utf-8");
/*
php程序中如何使用事务-课堂练习(课后也可以练习)

创建两张表 stu表 stu（id, 学生名,班级号） 和 班级表 cla(id,班级名, 班级人数), 学生添加3条记录，班级有一条记录.

要求，班级人数是学生的总计.
请在php中使用事务控制.
1、当添加一个学生时，班级的总人数+1(添加ok)
2、当删除一个学生时，班级的总人数-1;(删除ok)
 */
/*
sql代码
use dbtemp;

create table cla(
cla_id int unsigned primary key,
cla_name varchar(30),
stu_num tinyint unsigned
)engine=innoDB;

insert into cla values(101,'三年二班',3);

create table stu(
stu_id int unsigned primary key,
stu_name varchar(30),
cla_id int unsigned,
foreign key(cla_id) references cla(cla_id)
)engine=innoDB;

insert into stu values(1,'张三',101);
insert into stu values(2,'李四',101);
insert into stu values(3,'王五',101);

start transaction;
# set autocommit=false;
INSERT INTO stu values(4,'刘六',101);
UPDATE cla SET stu_num = (SELECT COUNT(*) FROM stu);
commit;

start transaction;
# set autocommit=false;
DELETE FROM stu where stu_id = 4;
UPDATE cla SET stu_num = (SELECT COUNT(*) FROM stu);
commit;

 */
