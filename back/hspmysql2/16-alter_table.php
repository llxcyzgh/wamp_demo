<?php
header("content-type:text/html;charset=utf-8");
/*
修改表: 修改表的结构,比如字段名称、字段的大小、字段的类型、表的字符集类型、表的存储引擎等等

增加、删除 字段
 */

/*
:
1、在上回员工表[database->db20,table->employee ]上增加一 image 列( 要求在resume 后面 );
2、修改 job 列,使其长度为60;
3、删除sex列;
4、表名改为user;
5、修改表的字符集为 utf8;
6、列名 name 修改为 username.

1、alter table employee add image varchar(125) not null default '' comment '图片路径' after resume;

2、
alter table employee modify job varchar(60) not null default '' comment '职位';
或
alter table employee change job varchar(60) not null default '' comment '职位';

3、alter table employee drop sex;

4、alter table employee rename to employees;

5、alter table employees charset=utf8;

6、alter table employees change name user_name varchar(60) not null default '' comment '用户名';

ps:
对原来的字段名作change修改时,必须带上其类型定义;
change和modify相比,change多修改了一个列名

 */
