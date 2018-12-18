<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/3
 * Time: 15:33
 */
/*
如果上传的文件不加任何修改，直接保存到uploads目录的话，uploads目录就会出现很多文件，不便于查找

分目录上传文件,一般按照日期创建子目录
 */

$arr_file_info = isset($_FILES['user_file']) ? $_FILES['user_file'] : '';

if (!$arr_file_info) {
    header('refresh:10;url=30-file_onload.html');
    echo '文件上传失败, 请重新上传<br>';
}

$max = 200 * 1024; // 200kb
if ($arr_file_info['size'] > $max) {
    header('refresh:3;url=030-file_onload.html');
    echo '上传文件大小不能超过 1M, 请重新上传<br>';
    exit;
}

// 获取文件名后缀, 然后新建唯一文件名, 保存在文件中
$dir = 'uploads\\';// 本来就创建好的根目录
$dir .= date('Ymd') . '\\';// 按日期创建子目录
/*
string date  ( string $format  [, int $timestamp  ] )
返回将整数 timestamp  按照给定的格式字串而产生的字符串。如果没有给出时间戳则使用本地当前时间。换句话说， timestamp  是可选的，默认值为 time() 。
 */
if(!is_dir($dir)){
    mkdir($dir,0777,true);
}

$houzui = strchr($arr_file_info['name'], '.');
$des = $dir . uniqid('tn_', true) . $houzui;

if (move_uploaded_file($arr_file_info['tmp_name'], $des)) {
    echo '文件上传成功<br>';
} else {
    echo '文件上传失败<br>';
}