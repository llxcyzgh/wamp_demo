<?php
header("content-type:text/html;charset=utf-8");
/*
■ 在from子句中使用子查询[子查询出现在from子句中]
请思考：如何显示高于自己部门平均工资的员工的信息（名字，薪水，和该部门的平均薪水）
也就是查询每个部门内高于该部门平均工资的员工信息

这里要用到数据查询的小技巧，把一个子查询当作一个临时表使用

方法一:
// SELECT deptno,avg(sal) FROM emp GROUP BY deptno;
SELECT a.deptno,myavg,b.ename,b.sal FROM (SELECT deptno,avg(sal) as myavg FROM emp GROUP BY deptno) a,emp b where (a.deptno=b.deptno) and (myavg<b.sal);

方法二:不能取出平均工资
select a.deptno,a.ename,a.sal from emp a where a.sal>(select avg(sal) as myavg from emp b where a.deptno=b.deptno);

 */

/*
查找每个部门工资最高的人的详细资料(雇员名，薪水，部门编号，最高工资)
select a.ename,a.sal,a.deptno from emp a where a.sal>=all(select sal from emp b where a.deptno=b.deptno);

select a.ename,a.sal,a.deptno from emp a where a.sal=(select max(sal) from emp b where a.deptno=b.deptno);

select a.ename,a.sal,a.deptno from emp a,(select deptno,max(sal) as mymax from emp group by deptno) b where a.deptno=b.deptno and a.sal=b.mymax;
 */

/*
课后练习：显示每个部门的信息(部门名,编号,地址)和人员数量,我们一起完成。

思路:
1. 先将人员信息和部门信息关联显示
select count(*) from emp group by deptno;
2. 然后统计

方法: 多表查询,子查询
方法一:
select a.deptno,a.dname,a.loc,b.mycount from dept a,(select deptno,count(*) mycount from emp group by deptno) b where a.deptno=b.deptno;

方法二:
select a.deptno,dname,loc,count(*) from dept a,emp b where a.deptno=b.deptno group by a.deptno;

 */
