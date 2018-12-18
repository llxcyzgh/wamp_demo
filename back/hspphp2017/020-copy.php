<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/31
 * Time: 23:33
 */
/*
文件编程应用实例-拷贝文件 copy
说明：将一张图片拷贝到另外一个目录下
*/
$file_src_full_path = 'd:美女.png';// 原文件路径
$file_des_full_path = 'e:孙艺珍2.png';// 复制目标文件路径
$file_src_full_path = iconv('utf-8', 'gbk', $file_src_full_path);// 对中文路径转码
$file_des_full_path = iconv('utf-8', 'gbk', $file_des_full_path);

if (!file_exists($file_src_full_path)) {
    echo '没有这个文件, 无法拷贝<br>';
} else {
    if (copy($file_src_full_path, $file_des_full_path)) {
        echo '拷贝成功<br>';
    } else {
        echo '拷贝失败<br>';
    }
}
