<?php
header("content-type:text/html;charset=utf-8");
/*
查询ecshop中各个类别中，价格最高的商品[类别+商品名+价格].
提示，会使用到:
ecs_goods   的 字段 goods_id cat_id goods_name shop_price
group by 会默认返回第一行.

SELECT cat_id,goods_name,shop_price FROM ecs_goods GROUP BY

 */
