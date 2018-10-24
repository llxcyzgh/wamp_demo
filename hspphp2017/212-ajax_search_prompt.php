<?php

$keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '***';


$mypdo = new PDO('mysql:host=localhost;dbname=php_7', 'root', '');

$sql  = "SELECT DISTINCT `goods_name` FROM `ecs_goods` WHERE goods_name LIKE '%{$keyword}%'";
$stmt = $mypdo->query($sql);
$res  = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($res);




/*
insert into ecs_goods values(null,'iphone7',6099);
insert into ecs_goods values(null,'iphone8',7299);
insert into ecs_goods values(null,'iphone8plus',7999);
insert into ecs_goods values(null,'一加一',1999);
insert into ecs_goods values(null,'一加二',2499);
insert into ecs_goods values(null,'一加三',2599);
 */