<?php
header("content-type:text/html;charset=utf-8");
// mysql 分页查询
/* 基本语法:
select 字段 from 表名 where 子句 limit 起始位置,取出多少条记录(偏移量);
说明: mysql记录的编号是从0开始
 */
/*
练习:
1、按雇员的id号升序取出， 每页显示3条记录。
请分别显示 第一页，第二页，第三页的sql语句
解:
(1) 先id升序取出
(2) 取出第一页[每页显示3条]
select * from emp order by empno limit 0,3;
select * from emp order by empno limit 3,3;
select * from emp order by empno limit 6,3;

2、按雇员的id号降序取出， 每页显示4条记录。
请分别显示 第3页，第5页 对应的sql语句
select * from emp order by empno desc limit 0,4;
select * from emp order by empno desc limit 4,4;
select * from emp order by empno desc limit 8,4;

 */

/*
■ 数据分组-max,min,avg,sum,count
?如何显示所有员工中最高工资和最低工资
select max(sal),min(sal) from emp;

?显示所有员工的平均工资和工资总和
select avg(sal),sum(sal) from emp;

?计算共有多少员工
select count(empno) from emp;

?请统计 部门编号为10的平均工资.
select avg(sal) from emp group by deptno having deptno = 10;
select avg(sal) from emp where deptno=10;


扩展要求：
?请显示工资最高的员工的名字，工作岗位
select ename,job,sal from emp where sal = (select max(sal) from emp);

?请显示工资高于平均工资的员工信息
select * from emp where sal > (select avg(sal) from emp);
 */

/*
■ group by 和 having子句
group by用于对查询的结果分组统计,
having子句用于限制分组显示结果.

同学们先思考
? 如何显示每个部门的平均工资和最高工资
select deptno,avg(sal),max(sal) from emp group by deptno;

? 显示每个部门的每种岗位的平均工资和最低工资
select deptno,job,avg(sal),min(sal) from emp group by deptno,job;

? 显示平均工资低于2000的部门号和它的平均工资[别名可用]
select deptno,avg(sal) from emp group by deptno;
select deptno,avg(sal) from emp group by deptno having avg(sal)<2000;
select deptno,avg(sal) as myavg from emp group by deptno having myavg<2000;
 */

/*
使用分组函数和数据分组子句
(1) 显示所有雇员的平均工资、总计工资、最高工资、最低工资。
select avg(ifnull(sal,0)) as '平均工资',sum(ifnull(sal,0)) as '总计工资',max(sal) as '最高工资',min(sal) as '最低工资' from emp;

(2) 显示每种岗位的雇员总数、平均工资。
select job,count(empno) as '每种岗位的雇员总数',avg(sal) as '每种岗位的平均工资' from emp group by job;

select count(*), avg(sal),job from emp group by job;

(3) 显示雇员总数，以及获得补助的雇员数。
select count(empno) from emp;
select count(empno) from emp where comm is not null;
select count(empno),count(if(comm>0,1,null)) from emp;

select count(*), count(if(comm>0.0, 1 , null)) from emp; //********************
(4) 显示管理者的总人数。
select count(distinct mgr) from emp;

(5) 显示雇员工资的最大差额。
select max(sal)-min(sal) from emp;

(6) 显示每个部门每个岗位的平均工资[1]、每个部门的平均工资[2]、每个岗位的平均工资[3]。
select deptno,job,avg(sal) from emp group by deptno,job;
select deptno,avg(sal) from emp group by deptno;
select job,avg(sal) from emp group by job;
 */

/*
如果在select 语句种同时包含有group by ,having ,
order by 那么他们的顺序是group by , having , order by

请统计各个部门的平均工资，并且是大于1000的，并且按照平均工资从高到低排序
select deptno,avg(sal) from emp group by deptno having avg(sal)>1000 order by avg(sal) desc;
select deptno,avg(sal) as 'myavg' from emp group by deptno having myavg>2000 order by avg(sal) desc;
 */
