<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/6
 * Time: 15:58
 */

$id = isset($_GET['id']) ? $_GET['id'] : 1;

// 加载smarty的核心类文件
require_once 'smarty/Smarty.class.php';
$smarty = new Smarty();

if (!$smarty->isCached('102-smarty_book.html', $id)) {
    require_once '093-DAOPDO.class.php';
    $option = array(
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'dbname' => 'php_7',
        'port' => 3306,
        'charset' => 'utf8'
    );
    $daopdo = DAOPDO::getSingleton($option);

// 查询book
    $sql = "SELECT name FROM book WHERE id='$id'";
    $book_name = $daopdo->fetchColumn($sql);
    $smarty->assign('book_name', $book_name);
}

// smarty 缓存
// 1.开启缓存
$smarty->caching = true;
// 2.设置缓存文件保存的地址(通常会存到cache目录里面)
$smarty->setCacheDir('cache');
//3. 设置缓存的有效期
$smarty->cache_lifetime = 60;

$smarty->display('102-smarty_book.html', $id);


