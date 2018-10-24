<?php
require_once 'img/DAOMySQLi.class.php';
require_once '041-page2.class.php';
$option = array(
    'host' => 'localhost',
    'user' => 'root',
    'pwd' => '',
    'dbname' => 'ecshop',
    'port' => '3306',
    'charset' => 'utf8'
);
$mydao = DAOMySQLi::getSingleton($option);
$mypage = new Page();

// 给分页对象的search赋值
$search = isset($_POST['search']) ? $_POST['search'] : '';
if(!$search){
    $search = isset($_GET['search']) ? $_GET['search'] : '';
}
$mypage->search = $search;
$where = '';
if($search){
    $where = " WHERE goods_name LIKE '%$search%' ";
}

// 对分页对象 -- 给总记录行数赋值
$sql = "SELECT COUNT(*) AS total FROM `ecs_goods` $where";
$total = $mydao->fetchRow($sql);
$mypage->total_rows = $total['total'];
// 对分页对象 -- 给每页最大记录条数赋值
$mypage->pagesize = 5;
// 对分页对象 -- 给当前页面赋值
$page = isset($_GET['page']) && is_numeric($_GET['page']) && strrpos($_GET['page'], '.') === false ? $_GET['page'] : 1;
$mypage->now_page = $page;

// sql 按要求查询详细记录
$offset = ($page - 1) * 5;// 从0开始
$limit = $mypage->pagesize;
// 初始查询指定页面的指定字段的信息
//$sql = "SELECT goods_name,shop_price FROM `ecs_goods` WHERE goods_name LIKE '%{$search}%'";
//$sql = "SELECT goods_name,shop_price FROM `ecs_goods` $where LIMIT $offset,$limit";
$sql = "SELECT goods_name,shop_price FROM `ecs_goods` $where ORDER BY shop_price ASC LIMIT $offset,$limit";
$goods_list = $mydao->fetchAll($sql);

// 引入html模板
require '042-show.php';