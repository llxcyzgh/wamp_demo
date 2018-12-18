<?php
header("content-type:text/html;charset=utf-8");
/*
■ 多列子查询
单行子查询是指子查询只返回单列、单行数据,多行子查询是指返回单列多行数据,都是针对单列而言的，而多列子查序则是指查询返回多个列数据的子查询语句
 */

/*
请查询和宋江数学，英语，语文 完全相同的学生  [查作弊学生]
select a.* from student2 a,(select * from student2 where name='宋江') b where a.chinese=b.chinese and a.math=b.math and a.english=b.english;

select * from student2 where (chinese,math,english)=(select chinese,math,english from student2 where name='宋江');

请思考如何查询与smith的部门和岗位完全相同的所有雇员(并且不含smith本人)
(字段1， 字段2 ...) = (select 字段 1，字段2 from 。。。。)
select a.* from emp a,(select * from emp where ename='SMITH') b where a.deptno=b.deptno and a.job=b.job and a.ename<>b.ename;
select a.* from emp a,(select * from emp where ename='ford') b where a.deptno=b.deptno and a.job=b.job and a.ename<>b.ename;
select a.* from emp a,(select * from emp where ename='aleen') b where a.deptno=b.deptno and a.job=b.job and a.ename<>b.ename;

select * from emp where (deptno,job)=(select deptno,job from emp where ename='FORD') and ename<>'FORD';

 */
