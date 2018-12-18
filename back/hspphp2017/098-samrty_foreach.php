<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/6
 * Time: 15:04
 */

require_once 'smarty/Smarty.class.php';
$smarty = new Smarty();

$goods = array(
    array('goods_id'=>1,'goods_name'=>'Nokia N8'),
    array('goods_id'=>2,'goods_name'=>'华为p10'),
    array('goods_id'=>3,'goods_name'=>'小米6')
);

$money=100000;

$smarty->assign('goods',$goods);
$smarty->assign('money',$money);
$smarty->display('98-smarty_foreach.html');