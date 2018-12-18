<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/6
 * Time: 15:58
 */
require_once '093-DAOPDO.class.php';
$option = array(
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'dbname' => 'ecshop',
    'port' => 3306,
    'charset' => 'utf8'
);
$daopdo = DAOPDO::getSingleton($option);

// 查询所有商品
$sql = "SELECT goods_id,goods_name,shop_price FROM ecs_goods";
$goods_list = $daopdo->fetchAll($sql);

//var_dump($goods_list);

// 加载smarty的核心类文件
require_once 'smarty/Smarty.class.php';
$smarty = new Smarty();

// smarty 缓存
// 1.开启缓存
$smarty->caching = true;
// 2.设置缓存文件保存的地址(通常会存到cache目录里面)
$smarty->setCacheDir('cache');
//3. 设置缓存的有效期
$smarty->cache_lifetime = 60;

$smarty->assign('goods_list', $goods_list);
$smarty->display('101-smarty_goods.html');


