create table customer2 (
	customer_id char(8) not null default '',
	name varchar(20),
	address varchar(30) not null default '',
	email varchar(30) ,
	sex enum('男','女') not null
);

alter table customer2 add primary key (customer_id);
alter table customer2 modify name varchar(20) not null default '';
alter table customer2 add unique (email);
ALTER TABLE customer2 ADD card_id VARCHAR(20) not null UNIQUE ;
ALTER TABLE customer2 MODIFY address VARCHAR(30) NOT NULL DEFAULT '泰牛学生宿舍';
# ALTER TABLE customer2 CHANGE address VARCHAR(30) NOT NULL DEFAULT '泰牛学生宿舍';
