<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/7
 * Time: 9:55
 */
// 引入smarty的核心类文件
require_once 'smarty/Smarty.class.php';
$smarty = new Smarty();

// 开启缓存
$smarty->caching = true;
$smarty->setCacheDir('cache');
$smarty->cache_lifetime = 60;

$id = isset($_GET['id']) ? $_GET['id'] : 1;

$smarty->assign('id',$id);
$smarty->display('103-smarty_template.html', $id);