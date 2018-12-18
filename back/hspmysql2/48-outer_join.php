<?php
header("content-type:text/html;charset=utf-8");
/*
■ 外连接
(1) 左外连接     (如果左侧的表完全显示我们就说是左外连接）
(2) 右外连接     (如果右侧的表完全显示我们就说是右外连接)
select 字段名... from 表名1  left outer join  表名2  on 连接条件;
select 字段名... from 表名1  left join  表名2  on 连接条件;

select 字段名... from 表名1  right outer join  表名2  on 连接条件;
select 字段名... from 表名1  right join  表名2  on 连接条件;
 */

/*
--表stu 学生表
id  name
1,  Jack
2,  Tom
3,  Kity
4,  Nono

--表exam 考试成绩表
id   grade
1,   56
2,   76
11,  8

create table stu(id int,name varchar(30));
insert into stu values(1,'Jack');
insert into stu values(2,'Tom');
insert into stu values(3,'Kity');
insert into stu values(4,'Nono');

create table exam(id int,grade int);
insert into exam values(1,56);
insert into exam values(2,76);
insert into exam values(11,8);

要求: 查询所有学生的成绩,如果这个学生没有成绩,也要将他的个人信息显示出来
select * from stu left join exam on stu.id=exam.id;

要求: 显示所有成绩，如果没有名字匹配，显示空
select * from stu right join exam on stu.id=exam.id;

要求: 实现学生表(stu)和考试成绩(exam)的完全显示效果?
【全外连】
select * from stu left join exam on stu.id=exam.id
union
select * from stu right join exam on stu.id=exam.id;

 */

/*
练习
列出雇员的名称，薪水，所在部门编号和名字，同时列出那些没有员工的部门。
要求 两种方式
(1) 使用左外连接实现
(2) 使用右外连接实现

(1)
select ename,sal,dept.deptno,dname from dept left join emp on dept.deptno=emp.deptno;

(2)
select ename,sal,dept.deptno,dname from emp right join dept on dept.deptno=emp.deptno;
 */
