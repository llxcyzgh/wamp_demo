<?php
header("content-type:text/html;charset=utf-8");
/*
流程控制函数
IF(expr1,expr2,expr3)        如果expr1为True,则返回expr2,否则返回expr3

IFNULL(expr1,expr2)          如果expr1不为空Null,则返回expr1,否则返回expr2

SELECT CASE
WHEN expr1 THEN expr2
WHEN expr3 THEN expr4
ELSE expr5
END;// 也可以多重分支

 */

/*
select empno,ename,if(comm,comm,0) from emp;
select empno,ename,if(comm is null,0,comm) from emp;

select empno,ename,ifnull(comm,0) from emp;

SELECT CASE
WHEN comm is null THEN 0
WHEN comm>300 THEN 'hello'
ELSE comm
END
FROM emp;

SELECT ename,(SELECT CASE
WHEN comm is null THEN 0
WHEN comm>300 THEN 'hello'
ELSE comm
END)
FROM emp;

 */
