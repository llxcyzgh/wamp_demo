<?php
header("content-type:text/html;charset=utf-8");
/*
update 语句修改表中数据
UPDATE table_name
SET col_name1=expr1[,col_name2=expr2...]
[WHERE where_definition];
 */

/*
练习:
将所有员工薪水修改为5000元;
将姓名为'zs'的员工薪水修改为3000元;
将姓名为'wu'的员工薪水在原有基础上增加1000元
 */

/*
use db100;
UPDATE employee SET salary=5000;
UPDATE employee SET salary=3000 WHERE name='小杨' ;
UPDATE employee SET salary=salary+1000 WHERE name='张三' ;

 */

/*
update细节说明:
update语法可以用新值更新原有表行中的各列;
set子句指示要修改哪些列和要给予哪些值;
where子句指定要更新哪些行.如果没有where子句,则更新所有行的该列;
如果需要修改多个字段,可以通过 set 字段1=值1,字段2=值2...;
 */
