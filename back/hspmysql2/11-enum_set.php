<?php
header("content-type:text/html;charset=utf-8");
/*
有一个需求：
1、有一个调查表 vates，需要调查人的喜好，比如（苹果、西瓜、菠萝）中去选择【可以多选 set】
2、（男、女）【单选 enum】
3、名字【非空】
 */

/*
create table votes (
username varchar(50) not null default '',
hobby set('苹果','西瓜','菠萝') not null,
sex enum('男','女') not null
) charset=utf8 engine=myisam;

insert into votes values('lucy','苹果,西瓜','女');
insert into votes values('lily','苹果,西瓜',2);
insert into votes values('green','3',2);

select * from votes where find_in_set('菠萝',hobby);


1,2,3=1+2,4,5=1+4,6=2+4,7=1+2+4
ps: set和enum 不能有默认值
 */

/*
select find_in_set('a','a,b,c,d');//返回前一个字符串在后面的字符串列表里面的位置，如果没有就返回0
 */
