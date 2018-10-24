<?php
header("content-type:text/html;charset=utf-8");
/*
■ 使用逻辑操作符号
?查询工资高于500或是岗位为MANAGER的雇员，同时还要满足他们的姓名首写字母为大写的J
SELECT ename,sal,job FROM `emp` WHERE (sal>500 OR job='MANAGER') AND BINARY ename LIKE 'J%';

■ 使用order by字句（示意图）
?如何按照工资的从低到高的顺序显示雇员的信息
SELECT ename,sal FROM emp order by sal;【默认为asc,即升序】
SELECT ename,sal FROM emp order by sal asc;
SELECT ename,sal FROM emp order by sal desc;
?按照部门号升序而雇员的工资降序排列
SELECT ename,deptno,sal FROM emp order by deptno,sal desc;
SELECT ename,deptno,sal FROM emp order by deptno asc,sal desc;

■ 使用列的别名排序[津贴]
对所有员工的年工资进行排序.
SELECT ename,job,sal*12 + IFNULL(comm,0) AS '年工资' FROM emp ORDER BY 年工资 desc;【非null则第一个,null则第二个】
注意: 别名作为order by 排序时,不能加引号

 */
