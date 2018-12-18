(1)数据库和表的设计
set names gbk;

create table students(
	id int unsigned not null default 0,
	name varchar(20) not null default ' ',
	chinese decimal(5,2) not null default 0.0, 
	math decimal(5,2) not null default 0.0, 
	english decimal(5,2) not null default 0.0 
) charset=utf8 engine=myISAM;

(2)根据设计完成代码