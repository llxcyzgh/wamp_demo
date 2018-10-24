SELECT cat_id,goods_name,shop_price FROM ecs_goods GROUP BY cat_id HAVING max(shop_price) ORDER BY shop_price desc;
SELECT * FROM (SELECT cat_id,goods_name,shop_price FROM ecs_goods ORDER BY cat_id,shop_price DESC) temp GROUP BY temp.cat_id;


SELECT newtable.cat_id,newtable.goods_name,newtable.shop_price FROM (SELECT cat_id,goods_name,shop_price FROM ecs_goods ORDER BY shop_price DESC)t as newtable GROUP BY newtable.cat_id;
SELECT cat_id,goods_name,shop_price FROM  ecs_goods ORDER BY shop_price DESC;


select temp.ename,temp.job,temp.deptno,temp.first([sal]) as val_1st from(select ename,job,deptno,sal from emp order by deptno,sal desc) as temp group by temp.deptno;



SELECT a.* FROM emp a where sal = (select max(sal) from emp where deptno=a.deptno) order by a.deptno;

SELECT a.cat_id,a.goods_name,a.shop_price FROM ecs_goods a where shop_price = (select max(shop_price) from ecs_goods where cat_id=a.cat_id) order by a.cat_id;

select a.cat_id,a.goods_name,a.shop_price from ecs_goods a,(select cat_id,goods_name,max(shop_price) from ecs_goods group by cat_id) b where a.goods_name=b.goods_name;



SELECT  goods_name, shop_price, cat_id FROM ecs_goods WHERE shop_price IN (SELECT max(shop_price) FROM ecs_goods GROUP BY cat_id);

