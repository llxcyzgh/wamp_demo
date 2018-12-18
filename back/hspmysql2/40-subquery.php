<?php
header("content-type:text/html;charset=utf-8");
/*
■ 什么是子查询
子查询是指嵌入在其它sql查询语句中的select语句,也叫嵌套查询
■ 单行子查询
单行子查询是指只返回一行数据的子查询语句
请思考：如何显示与SMITH同一部门的所有员工?
select ename,deptno from emp where deptno=(select deptno from emp where ename='SMITH' );
select ename,deptno from emp where deptno=(select deptno from emp where ename='SMITH' ) and ename<>'SMITH';

select b.ename,b.deptno from emp as a,emp as b where a.deptno=b.deptno and a.ename='SMITH' and b.ename<>'SMITH';

■ 多行子查询
多行子查询指返回多行数据的子查询   使用关键字 in
 */

/*
练习:如何查询和10号部门的工作相同的雇员的名字、岗位、工资、部门号, 但是不含10号部门的雇员.
select ename,job,sal,deptno from emp where job=any(select distinct job from emp where deptno=10) and deptno<>10;
select ename,job,sal,deptno from emp where job in(select distinct job from emp where deptno=10) and deptno<>10;

SELECT a.job,b.ename,b.sal,b.deptno FROM emp a,emp b WHERE a.deptno=10 AND a.job=b.job and b.deptno<>10;
 */
