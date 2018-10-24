<?php
header("content-type:text/html;charset=utf-8");
// 多表查询 见 24-employee-tables.sql 共有三张表 部门表+雇员信息表+薪资级别表
/*
mysql表的基本操作
1、查看表结构
desc 表名;
show create table 表名;
2、查询所有列
select * from 表名;
3、查询指定列
select 列名1,列名2... from 表名;
4、如何取消重复行
select distinct 列名 from 表名;
 */
/*
练习:
1、使用算数表达式   计算每个雇员的年工资?
2、使用列的别名
select ename as "姓名", sal*12 + IFNULL(comm,0) * 12 as "年工资" from emp;
 */

/*
■ 使用where子句
?如何显示工资高于3000的员工
select ename,sal from emp where sal > 3000;
?如何查找1982.1.1后入职的员工 //日期类型是可以比较
select ename,hiredate from emp where hiredate > '1982-1-1';
select ename,hiredate from emp where datediff(hiredate,'1982-1-1') > 0;
?如何显示工资在2000到2500的员工情况 // 比较运算符  between
select ename,sal from emp where sal >= 2000 and sal <= 2500;
select ename,sal from emp where sal between 2000 and 2500;
■ 如何使用like操作符
%: 表示任意0到多个字符
_: 表示任意单个字符
?如何显示首字符为S的员工姓名和工资
select ename,sal from emp where ename like 'S%';
select ename,sal from emp where binary ename like 's%';【强制区分大小写】
?如何显示第三个字符为大写O的所有员工的姓名和工资
select ename,sal from emp where substring(ename,3,1) = 'O';
select ename,sal from emp where ename like '__O%';
■ 在where条件中使用in
?如何显示empno为 123,345,800...的雇员情况
select ename,empno from emp where empno in(7499,7900,7934);
■
?如何显示没有上级的雇员的情况
select ename,mgr from emp where mgr is null;
select ename,mgr from emp where mgr is not null;

 */
