<?php
header("content-type:text/html;charset=utf-8");
/*
1、较频繁的作为查询条件字段应该创建索引
select * from emp where empno = 1

2、唯一性太差的字段不适合单独创建索引，即使频繁作为查询条件
select * from emp where sex = '男‘

3、更新非常频繁的字段不适合创建索引
select * from emp where logincount = 1

4、不会出现在WHERE子句中字段不该创建索引

 */
