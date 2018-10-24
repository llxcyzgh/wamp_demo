<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/3
 * Time: 11:56
 */
//var_dump($_FILES);
//exit;

$arr_file_info = isset($_FILES['user_file']) ? $_FILES['user_file'] : '';
//var_dump($arr_file_info);

if (!$arr_file_info) {
    header('refresh:10;url=30-file_onload.html');
    echo '文件上传失败, 请重新上传<br>';
}

// 限制上传文件大小--但还是在temp目录走了一圈
// 如果希望文件太大时,不进入tmep, 可在php.ini 设置  upload_max_filesize = 2M
// post提交的最大限制[包括文本和文件] post_max_size = 8M
$max = 200*1024; // 200kb
if ($arr_file_info['size']> $max) {
    header('refresh:3;url=30-file_onload.html');
    echo '上传文件大小不能超过 1M, 请重新上传<br>';
    exit;
}

// 获取文件名后缀
$houzui = strchr($arr_file_info['name'],'.');
$des = 'uploads\\'.uniqid('tn_',true). $houzui;
/*
uniqid — 生成一个唯一ID
string uniqid  ([ string $prefix  = ""  [, bool $more_entropy  = false  ]] )
*/
//echo $des;
//exit;

if (move_uploaded_file($arr_file_info['tmp_name'], $des)) {
    echo '文件上传成功<br>';
} else {
    echo '文件上传失败<br>';
}