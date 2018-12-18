/*
■ 商店售货系统表设计案例[先练,再评]
现有一个商店的数据库，记录客户及其购物情况，由下面三个表组成：
商品goods（商品号goods_id，商品名goods_name，单价unitprice，商品类别category，供应商provider);
客户customer（客户号customer_id,姓名name,住址address,电邮email性别sex,身份证card_Id);
购买purchase（购买订单号order_id，客户号customer_id,商品号goods_id,购买数量nums);

1 建表，在定义中要求声明 [进行合理设计]：
(1)每个表的主外键；
(2)客户的姓名不能为空值；
(3)电邮不能够重复;
(4)客户的性别[男|女]
(5)单价unitprice 在 1.0 - 9999.99 之间 check
*/
create table goods(
goods_id int unsigned primary key comment '商品号',
goods_name varchar(150) not null default '' comment '商品名',
unitprice decimal(8,2) not null default 0.00 comment '单价',
category samllint unsigned not null default 0 comment '商品类别',
provider varchar(80) not null default '' comment '供应商'
)engine=innodb charset=utf8 collate utf8_general_ci;

create table customer(
customer_id int unsigned primary key comment '客户号',
name varchar(30) not null default '',
address varchar(80) not null default '',
email varchar(60) not null unique,
sex enum('man','woman') not null,
card_id varchar(28) not null unique
)engine=innodb charset=utf8 collate utf8_general_ci;

create table purchase(
order_id varchar(40) primary key,
customer_id int unsigned,
goods_id int unsigned,
nums mediumint unsigned not null default 0,
foreign key(customer_id) references customer(customer_id),
foreign key(goods_id) references ecs_goods (goods_id)
)engine=innodb charset=utf8 collate utf8_general_ci;

/*
自己写的如下:::::

use db100;

create table goods(
goods_id int unsigned primary,
goods_name varchar(60) not null default '',
unitprice decimal(10,2) check(unitprice between 1.0 and 9999.99),
category varchar(60) not null default '',
provider varchar(60)
)engine=innodb charset=utf8;

create table customer(
customer_id int unsigned primary,
name varchar(60) not null default '',
address decimal(10,2) not null default 0.00,
email varchar(60) unique,
sex enum('male','female'),
card_id varchar(20)
)engine=innodb charset=utf8;

create table purchase(
order_id int unsigned primary,
customer_id int unsigned,
goods_id int unsigned,
nums int unsigned not null default 0,
foreign key goods_id references goods(goods_id),
foreign key customer_id references customer(customer_id)
)engine=innodb charset=utf8;



*/