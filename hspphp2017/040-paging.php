<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/3
 * Time: 23:19
 */
require_once 'img/DAOMySQLi.class.php';
require_once '040-page.class.php';

$option = array(
    'host' => 'localhost',
    'user' => 'root',
    'pwd' => '',
    'dbname' => 'ecshop',
    'port' => '3306',
    'charset' => 'utf8'
);
$dao = DAOMySQLi::getSingleton($option);
// 设置分页导航 --开始--
$sql = "SELECT count(*) AS total_rows FROM `ecs_goods`";
$row = $dao->fetchRow($sql);

$page = new Page(); // 分页类
$page->total_rows = $row['total_rows'];
$page->pagesize = 2;
$page->now_page = isset($_GET['page']) ? $_GET['page'] : 1;
$ul = $page->create();
// 设置分页导航 --结束--

// 设置表格内容 --开始--
$offset = ($page->now_page - 1) * $page->pagesize;
$limit = $page->pagesize;
$sql = "SELECT `goods_id`,`goods_name`,`shop_price` FROM `ecs_goods` ORDER BY `goods_id` LIMIT $offset,$limit";

$goods_list = $dao->fetchAll($sql);
// 设置表格内容 --结束--

require_once '040-paging.html';