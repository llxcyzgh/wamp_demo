<?php
header("content-type:text/html;charset=utf-8");
/*
mysql日期函数
基本介绍
CURRENT_DATE()                当前日期(不带时间)
CURRENT_TIME()                当前时间(不带日期)
CURRENT_TIMESTAMP()           当前日期+时间

DATE(datetime)                  返回datetime的日期部分
time(datetime)                  返回datetime的时间部分

DATE_ADD(date2,INTERVAL d_value d_type)        在date2中加上时期或时间(没有time_add())
DATE_SUB(date2,INTERVAL d_value d_type)        在date2上减去一个时间

DATEDIFF(date1,date2)                         两个日期差(第一个减去第二个,结果是天)
TIMEDIFF(date1,date2)                         两个时间差(结果是 时分秒)(时分秒  和 时分秒相减)

NOW()                            当前日期和时间(等同于CURRENT_TIMESTAMP())

YEAR|MONTH|DATE()                 年月日
FROM_UNXIXTIME()                  年月日
 */

/*
综合练习
四个函数和基本使用,创建一张留言表
create table message(id int, content varchar(30), sendtime datetime);
insert into message values(3,'hello3',now());
insert into message values(4,'hello4',now());

查询:
1、显示所有留言信息,发布日期只显示 '日期',不显示 '时间'
2、请查询在10分钟内发布的帖子
3、请在mysql的sql语句中求出 2011-11-11 和 1990-1-1 相差多少天
4、请用mysql的sql语句求出你活了多少天?
5、如果你可以活到100岁,那么你还可以活多少天?

解:
1、
select id,content,date(sendtime) from message;
select id,content,date(sendtime) as '发帖日期' from message;
select id,content,date(sendtime) as 发帖日期 from message;
2、
select id,content,sendtime from message where timediff(now(),sendtime) < '00:10:00';
select id,content,sendtime from message where date_add(sendtime,interval 10 minute) > now();
3、
select datediff('2011-11-11','1990-1-1');
4、
select datediff(now(),'1991-3-12');
5、
select datediff(date_add('1991-03-12',interval 100 year),now());

 */
