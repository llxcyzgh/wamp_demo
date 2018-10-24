<?php
header("content-type:text/html;charset=utf-8");
/*
索引的查询
查询索引有5种方式
(1)    show index from 表名\G  【\G表示 我们查询的记录是纵向排序】
(2)    show indexes from 表名\G
(3)    show keys from 表名\G  【推荐使用这种】
(4)    desc 表名;【只能显示主键和唯一索引,不能显示普通或全文索引】
(5)    show create table 表名;
 */

/*
删除索引
1、主键删除
alter table tb_name drop primary key;
2、其它索引删除
alter table tb_name drop index 索引名;
或
drop index index_name on tb_name;
说明:在删除索引前,先使用查看索引的指令,获得 key_name[也就是 index_name索引名],然后再删除
 */

/*
修改索引
先删除,再创建
 */
