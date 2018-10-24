<?php
header("content-type:text/html;charset=utf-8");
/*
针对 emp ，dept , 和 salgrade 三张表.创建一个视图，可以显示雇员编号，雇员名，雇员部门名称和 薪水级别
 */

/*
use db100;
select * from emp;
select * from dept;
select * from salgrade;

create view zhuview1 as select empno,ename,dname,sal from emp left join dept on emp.deptno=dept.deptno;

select empno,ename,dname,grade from zhuview1 left join salgrade on sal between losal and hisal;
 */
