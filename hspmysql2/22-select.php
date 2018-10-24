<?php
header("content-type:text/html;charset=utf-8");
/*
select语句基本语法
SELECT [DISTINCT] *|{column1,column2,column3...} FROM table_name;

select 指定查询哪些列的数据;
column 指定列名;
 * 号代表查询所有列;
from 指定查询哪张表;
distinct 可选.指显示结果时,是否剔除重复数据
 */

/*
CREATE table student2(
id int unsigned not null default 0,
name varchar(20) not null default '',
chinese float not null default 0,
math float not null default 0,
english float not null default 0
)charset=utf8 engine=myisam;

INSERT into student2(id,name,chinese,english,math) values(1,'韩顺平',89,78,90);
INSERT into student2(id,name,chinese,math,english) values(2,'张飞',67,98,56);
INSERT into student2(id,name,chinese,english,math) values(3,'宋江',8,70,100);
INSERT into student2(id,name,chinese,english,math) values(4,'关羽',88,70,70);
INSERT into student2(id,name,chinese,english,math) values(5,'赵云',82,74,69);
INSERT into student2(id,name,chinese,english,math) values(6,'欧阳锋',95,90,97);
INSERT into student2(id,name,chinese,english,math) values(7,'黄莺',97,96,99);
*/

/*
练习:
1、查询表中所有学生的信息
2、查询表中所有学生的姓名和对应的英语成绩
3、过滤表中重复数据[distinct]


1、SELECT * FROM student2;
2、SELECT name,english FROM student2;
3、SELECT DISTINCT * FROM student2;

*/

/*
注意:
不要随便使用*用于查询(类同于css中的通配符选择器),避免当字段多时,影响效率
*/

/****************************************************/

/*
对列进行运算和别名操作
在select语句中可以使用表达式对查询的列进行运算
select *|{column1|expression,column2|expression,...} from table_name

在select语句中可使用as语句
select columname as 别名 from 表名;

*/
/*
练习:
1、在所有学生分数上加10分特长分(即查询所有学生总分再加10分)
2、统计每个学生的总分
3、使用别名表示学生分数


1、SELECT name,chinese+english+math+10 FROM student2;
2、SELECT name,chinese+english+math FROM student2;
3、SELECT name,chinese+english+math as '总分' FROM student2;

*/

/*
练习:
1、在姓赵的学生分数上增加60%(即查询总分再加60%)
2、统计姓李的学生的总分
3、使用别名表示学生的数学分数


1、SELECT name,round((chinese+math+english)*1.6,2) FROM student2 where name like '赵%';
2、SELECT name,chinese+math+english FROM student2 where name like '黄%';
3、SELECT name,math as '数学成绩' FROM student2;

*/