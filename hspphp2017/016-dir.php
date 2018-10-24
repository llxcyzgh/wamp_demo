<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/31
 * Time: 21:15
 */
/*
对目录(文件夹)的操作 mkdir、is_dir、rmdir 等
1. 创建一级目录
2. 创建多级目录
3. 删除目录
 */

// 创建一级目录
$dir_full_path = 'd:/tnweb';
// 判断有没有该目录
if (!is_dir($dir_full_path)){
    if(mkdir($dir_full_path)){
        echo '创建目录成功<br>';
    }else{
        echo '创建目录失败<br>';
    }
}else{
    echo '目录已经存在, 不能重复创建<br>';
}