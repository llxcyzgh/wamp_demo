<?php
header("content-type:text/html;charset=utf-8");
// mysql 数据类型之 日期
/*
date 只能存放 年、月、日
datetime 可以存放 年、月、日 时、分、秒
timestamp 表示时间戳，可用于自动记录insert、update操作的时间
 */

/* 在mysql5.7以后 timestamp自动默认为null，需要写成 default CURRENT_TIMESTAMP)
/*
create table birthday3 (t1 date,t2 datetime,t3 timestamp no null default current_timestamp);

insert into birthday3 (t1,t3) values ('2015-05-06','2017/06/09 9:5:7');

 */

