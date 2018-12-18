<?php
header("content-type:text/html;charset=utf-8");
/*
■ 自连接: 自连接是指在同一张表的连接查询。

?显示某个员工的上级领导的姓名,比如显示’FORD’的上级.[两种方法: 子查询 + 自连接(多表查询)]
select ename from emp where empno=(select mgr from emp where ename='FORD');
select ename from emp where empno=(select mgr from emp where ename='SMITH');
select a.ename,b.ename as '上级领导姓名' from emp as a,emp as b where a.mgr=b.empno and a.ename='SMITH';
select a.ename,b.ename as '上级领导姓名' from emp as a,emp as b where a.ename='SMITH' and a.mgr=b.empno;
select concat(a.ename,' 的上级是 ',b.ename) from emp as a,emp as b where a.ename='SMITH' and a.mgr=b.empno;

思考题: 显示公司每个员工名字和他的上级的名字
select a.ename,b.ename as '上级领导姓名' from emp as a,emp as b where a.mgr=b.empno;
 */
