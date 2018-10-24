<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/31
 * Time: 22:07
 */
// 删除一级目录[最里面的目录,没有子目录,没有子文件的目录]
// php设计者没有提供删除整个目录(包括多个子目录,子文件)的函数, 可以自己写一个
// 目录的改名   同文件的改名 rename(), 因为目录也是一个特殊的文件
$dir_full_path = 'd:/tnweb2/aaa/bbb/ccc/ddd';
if (is_dir($dir_full_path)) {
    // rmdir  -- remove directory 的简写
    if (rmdir($dir_full_path)) {
        echo '删除目录成功<br>';
    } else {
        echo '删除目录失败<br>';
    }
} else {
    echo '目录不存在,无法删除<br>';

}