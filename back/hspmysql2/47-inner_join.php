<?php
header("content-type:text/html;charset=utf-8");
/*
■ 概述
表连接分为内连接和外连接。

■ 内连接
内连接实际上就是利用 where 子句对两张(多表)表形成的笛卡尔积进行筛选,我们前面学习的查询都是内连接,也是在开发过程中用的最多的连接查询。

select 字段 from 表1,表2 where 连接条件 AND 其它条件;

基本语法:
select  字段  from  表1   inner join   表2     on      连接条件 AND 其它条件;
请显示雇员的名字，工作，和部门的名称??
内连写法一:
select ename,job,dname from emp,dept where emp.deptno=dept.deptno;
内连写法二:
select ename,job,dname from emp inner join dept on emp.deptno=dept.deptno;
其中, inner 可以省略不写
select ename,job,dname from emp join dept on emp.deptno=dept.deptno;
 */
