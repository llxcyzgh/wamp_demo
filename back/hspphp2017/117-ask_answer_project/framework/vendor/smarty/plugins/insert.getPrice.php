<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/6
 * Time: 17:18
 */
function smarty_insert_getPrice($param){
    $id = $param['id'];
    global $daopdo;
    $sql = "SELECT shop_price FROM ecs_goods WHERE goods_id='$id'";
    return $daopdo->fetchColumn($sql);
}