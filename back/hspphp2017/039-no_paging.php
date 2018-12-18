<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/3
 * Time: 22:59
 */
require_once 'img/DAOMySQLi.class.php';
$option = array(
    'host' => 'localhost',
    'user' => 'root',
    'pwd' => '',
    'dbname' => 'ecshop',
    'port' => '3306',
    'charset' => 'utf8'
);
$dao = DAOMySQLi::getSingleton($option);

$sql = "SELECT `goods_id`,`goods_name`,`shop_price` FROM `ecs_goods`";

$goods_list = $dao->fetchAll($sql);

require_once '039-no_paging.html';