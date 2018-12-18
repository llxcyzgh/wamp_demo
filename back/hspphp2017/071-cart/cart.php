<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/4
 * Time: 16:07
 */
/*
在buy.php页面进行计算：如果商品已经购买了，提示该商品的数量，如果没有购买该商品的数量就是1：
 */

// 1.接收加入购物车的商品
$book = isset($_GET['name']) ? $_GET['name'] : '';
if (!$book) {
    exit;
}
// 2.将商品的信息存储到session文件
session_start();
if (!array_key_exists('cart', $_SESSION)) {
    $_SESSION['cart'] = array();
}
if (array_key_exists($book, $_SESSION['cart'])) {
    $_SESSION['cart'][$book]++;
} else {
    $_SESSION['cart'][$book] = 1;
}

echo '加入购物车成功!';
//var_dump($_SESSION);

//exit;
header('refresh:3;url=goods_list.php');
