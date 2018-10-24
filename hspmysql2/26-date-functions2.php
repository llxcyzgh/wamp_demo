<?php
header("content-type:text/html;charset=utf-8");
/*
TIMEDIFF(date1,date2)             两个时间差(结果是 时分秒)
NOW()                             当前日期+时间
YEAR()|MONTH()|DATE()             年|月|日
UNIX_TIMESTAMP()                  时间戳(没有参数时是当前的时间戳;有参数,表示该参数时间的时间戳)
FROM_UNXIXTIME()                  把时间时间戳格式化成年月日时分秒(可自定义格式输出)
 */
/*
获取年份和月份
select * from message where year(sendtime)=2017 and month(sendtime)=12;

select from_unixtime(unix_timestamp(),'%Y-%m-%d %H:%i:%s');// 大写Y是2017(小写y是17);大写H是24小时制(小写h是12小时制)

 */

/*
练习:
在实际开发中,也经常使用int来保存一个unix时间戳
1、设计一张表,使用int保存时间,在显示时,可以按 '年-月-日 时:分:秒' 的形式显示在控制台
create table mymes(id int unsigned not null default 0,content text,send_time int unsigned not null default 0) engine=myisam default charset=utf8;
insert into mymes values(1,'hello',unix_timestamp());
select id,content,from_unixtime(send_time) from mymes;
select id,content,from_unixtime(send_time,'%Y-%m-%d %H:%i:%s') from mymes;

2、能够通过php程序添加时间,并且可以在php页面也按 '年-月-日 时:分:秒' 形式显示在页面 date_default_timezone_set

 */
