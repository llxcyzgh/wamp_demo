<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/31
 * Time: 22:00
 */
// 创建多级目录
// 创建 d:/tnweb2/aaa/ddd/ccc/ddd
$dir_full_path = 'd:/tnweb2/aaa/bbb/ccc/ddd';
if (is_dir($dir_full_path)) {
    echo '目录已经存在<br>';
} else {
    // 在默认情况下,目录只能一级一级地创建
    // mkdir($dir_full_path,0777,true)
    if (mkdir($dir_full_path,0777,true)) {
        echo '目录创建成功<br>';
    } else {
        echo '目录创建失败<br>';
    }
}