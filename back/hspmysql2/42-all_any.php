<?php
header("content-type:text/html;charset=utf-8");
/*
■ 在多行子查询中使用all操作符

请思考:如何显示工资比部门30的所有员工的工资高的员工的姓名、工资和部门号
select ename,sal,deptno from emp where sal>all (select sal from emp where deptno=30);

扩展要求：还有没有别的查询方法.
select ename,sal,deptno from emp where sal>(select max(sal) from emp where deptno=30);

Select ename,sal,deptno from emp  where sal>(select max(sal) from emp where deptno=30);
 */

/*
■ 在多行子查询中使用any操作符

请思考:如何显示工资比部门30的其中一个员工的工资高的员工的姓名、工资和部门号
select ename,sal,deptno from emp where sal> any(select sal from emp where deptno=30);

扩展要求：还有没有别的查询方法.
select ename,sal,deptno from emp where sal> (select min(sal) from emp where deptno=30);
 */
