<?php
header("content-type:text/html;charset=utf-8");
/*
■ 合并查询 【了解】
有时在实际应用中，为了合并多个select语句的结果，可以使用集合操作符号 union , union all
1)union
该操作符用于取得两个结果集的并集。当使用该操作符时，会自动去掉结果集中重复行。
select ename,sal,job from emp where sal>2000 union
select ename,sal,job from emp where job='MANAGER';

等同于
select ename,sal,job from emp where sal>2000 or job='MANAGER';

2)union all
该操作赋与union相似，但是它不会取消重复行,而且不会排序。
select ename,sal,job from emp where sal>2000
union all select ename,sal,job from emp where
job='manager';

 */
