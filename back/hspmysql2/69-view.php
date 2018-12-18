<?php
header("content-type:text/html;charset=utf-8");
/*
视图是一个虚拟表，其内容由查询定义。同真实的表一样，视图包含一系列带有名称的列和行数据。

视图的数据变化会影响到基表，基表的数据变化也会影响到视图[insert update delete ]

 */

/*
视图的基本使用

create view 视图名 as select语句
alter view 视图名 as select语句
SHOW CREATE VIEW  视图名
drop view 视图名1,视图名2

 */

/*
无效的示范

select goods_id, cat_id, goods_name,shop_price from ecs_goods order by cat_id,shop_price desc;

select * from (select goods_id, cat_id, goods_name,shop_price from ecs_goods order by cat_id asc, shop_price desc) xx group by xx.cat_id;

select * from (select goods_id, cat_id, goods_name,shop_price from ecs_goods order by shop_price desc) xx group by cat_id;
 */

/*
有效写法

select a.goods_id, a.cat_id, a.goods_name, a.shop_price from ecs_goods a where a.shop_price = (select max(shop_price) from ecs_goods b where a.cat_id=b.cat_id) order by cat_id;
 */

/*
视图的algorithm(运算规则)
algorithm = merge/temptable/undefined
默认为undefined,也就是merge
merge:当引用视图时，引用视图的语句与定义视图的语句合并
temptable: 以视图为基准进行select
 */
