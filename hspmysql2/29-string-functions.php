<?php
header("content-type:text/html;charset=utf-8");
/*
CHARSET(str)                    返回字串字符集
CONCAT (string2  [,... ])        连接字串
INSTR (string ,substring )        返回substring在string中出现的位置,没有返回0
UCASE (string2 )                转换成大写
LCASE (string2 )                转换成小写
LEFT (string2 ,length )            从string2中的左边起取length个字符
LENGTH (string )                string长度[按照字节]
REPLACE (str ,search_str ,replace_str )        在str中用replace_str替换search_str
STRCMP (string1 ,string2 )                    逐字符比较两字串大小,
SUBSTRING (str , position  [,length ])        从str的position开始,取length个字符
LTRIM (string2 ) RTRIM (string2 )  trim(str)    去除前端空格或后端空格

 */
/*
综合练习: 以首字母小写,其它大写的方式显示所有员工的姓名
SELECT ename,CONCAT(LCASE(SUBSTRING(ename,1,1)),UCASE(SUBSTRING(ename,2))) FROM emp;
SELECT ename,CONCAT(UCASE(SUBSTRING(ename,1,1)),LCASE(SUBSTRING(ename,2))) FROM emp;

 */
