<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/3
 * Time: 15:52
 */
/*
假设有这样一个需求：上传用户的头像
这个时候我们只能上传图片（jpg、png、gif），所以我们就应该上传的时候做一个判断
思路：首先，定义一个数组保存支持的上传的文件的类型，然后再拿上传的文件的实际类型和支持的类型进行比较
 */
// 1. 获取从表单中上传的文件信息,另存为数组 $arr_file_info
$arr_file_info = isset($_FILES['user_file']) ? $_FILES['user_file'] : '';

if (!$arr_file_info) {
    header('refresh:10;url=30-file_onload.html');
    echo '文件上传失败, 请重新上传<br>';
}

// 2. 限制上传的文件大小
$max = 200 * 1024; // 200kb
if ($arr_file_info['size'] > $max) {
    header('refresh:3;url=30-file_onload.html');
    echo '上传文件大小不能超过 1M, 请重新上传<br>';
    exit;
}

// 3. 限制文件类型
$allow_type = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
// 3.1 初步用$_FILE 的type 来判断[这里的type是从文件上传的后缀名而得来,有风险]
$file_type = $arr_file_info['type'];
//if(false === array_search($file_type,$allow_type)){
if (!in_array($file_type, $allow_type)) {
    header('refresh:3;url=30-file_onload.html');
    echo '上传文件类型不支持, 请重新上传<br>';
    exit;
}
// 3.2 深度过滤文件类型(防止js等文件改名为.jpg而蒙混过关),也就是不依赖$_FILE 的type而获取文件类型,而是对文件作检测
$finfo = new Finfo(FILEINFO_MIME_TYPE);
$file_type = $finfo->file($arr_file_info['tmp_name']);
if (!in_array($file_type, $allow_type)) {
    header('refresh:3;url=30-file_onload.html');
    echo '上传文件类型不支持, 请重新上传 [文件后缀可能得到篡改]<br>';
    exit;
}

/*
in_array — 检查数组中是否存在某个值
bool in_array  ( mixed  $needle  , array $haystack  [, bool $strict  = FALSE    ] )

array_search — 在数组中搜索给定的值，如果成功则返回相应的键名
mixed  array_search  ( mixed  $needle  , array $haystack  [, bool $strict  = false  ] )
 */


// 4. 按日期新建分目录
$dir = 'uploads\\';// 本来就创建好的根目录
$dir .= date('Ymd') . '\\';// 按日期创建子目录
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

// 5. 根据文件名后缀, 新建唯一文件名
$houzui = strchr($arr_file_info['name'], '.');
$des = $dir . uniqid('tn_', true) . $houzui;

// 6. 保存在指定目录
if (move_uploaded_file($arr_file_info['tmp_name'], $des)) {
    echo '文件上传成功<br>';
} else {
    echo '文件上传失败<br>';
}