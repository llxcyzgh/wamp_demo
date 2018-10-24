<?php
header("content-type:text/html;charset=utf-8");
/*
not null
default
comment
 */
/*
create table test (id int not null default 0 commet 'id号',name varchar(60) not null default '' comment '名字');

insert into test values(null,null); // not null 表示禁止null作为值传入

insert into test (id) value(1); // default 表示只有一个值传入时,另一个会用默认的default值;否则另一个值在not null的情况下不能不输入

 */

/*
在控制台中使用mysql的帮助手册的指令

? create;
? create table;
 */
