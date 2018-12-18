<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/30
 * Time: 10:35
 */
/*
 * 如何获取到文件的大小,类型[文件/目录],文件修改、访问和创建时间等信息
 * 两种方式[二]
 */
//date_default_timezone_set('Asia/Tokyo');
//date_default_timezone_set('Asia/Taipei');
date_default_timezone_set('PRC');
date_default_timezone_set('Asia/Shanghai');
// 1、定义文件的路径
$file_full_path = 'e:/abc.txt';

if(file_exists($file_full_path)){
    // 直接使用一组函数来获取文件信息,而不需要打开文件
    echo '文件信息如下 :<br>';
    echo '文件的大小是: ' . filesize($file_full_path) . ' 字节<br>';
    echo '文件的类型是: ' . filetype($file_full_path) . '<br>';
    echo '文件的访问时间是: ' . date('Y-m-d H:i:s',fileatime($file_full_path)) . '<br>';
    echo '文件的修改时间是: ' . date('Y-m-d H:i:s',filemtime($file_full_path)) . '<br>';
    echo '文件的创建时间是: ' . date('Y-m-d H:i:s',filectime($file_full_path)) . '<br>';
}else{
    echo '文件不存在<br>';
}
