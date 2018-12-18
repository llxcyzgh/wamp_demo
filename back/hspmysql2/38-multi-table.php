<?php
header("content-type:text/html;charset=utf-8");
/*
多表查询是指基于两个和两个以上的表或是视图的查询.在实际应用中,查询单个表可能不能满足你的需求,（如显示sales部门位置和其员工的姓名),这种情况下需要使用到(dept表和emp表)

?显示雇员名,雇员工资及所在部门的名字 【笛卡尔集】
select * from emp,dept;
select ename,sal,dname from emp,dept where emp.deptno=dept.deptno;

规定:多表查询的条件是 至少不能少于 表的个数-1
select * from emp,dept where emp.deptno = dept.deptno;

?如何显示部门号为10的部门名、员工名和工资
select dname,ename,sal from emp,dept where emp.deptno=dept.deptno and dept.deptno=10;
select dname,ename,sal from emp,dept where emp.deptno=10 and dept.deptno=10;
// 对于没有冲突的字段名,不需要指定表名,冲突的字段名则需要指定表名

?显示各个员工的姓名，工资，及其工资的级别
select ename,sal,grade from emp,salgrade where sal between losal and hisal;
select ename,sal,grade from emp,salgrade where sal>=losal and sal<=hisal;

?显示雇员名,雇员工资及所在部门的名字,显示工资的级别
select ename,sal,emp.deptno,grade from emp,dept,salgrade where emp.deptno=dept.deptno and (sal between losal and hisal);

 */
