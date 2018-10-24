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

// 清除模板指定的缓存[带参数]
$smarty->clearCache('103-smarty_template.html', 1);

// 清空一个模板的所有缓存[不带参数]
$smarty->clearCache('103-smarty_template.html');

// 清空全部模板的全部缓存
$smarty->clearAllCache();
