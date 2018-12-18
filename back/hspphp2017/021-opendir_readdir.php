<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/1
 * Time: 10:05
 */
header('content-type:text/html;charset=utf-8');
/*
经典案例1-遍历某个文件夹，判断该文件夹下的内容分别是目录还是文件？
先介绍两个重要的函数
(1)    opendir 和 readdir
opendir : 打开一个目录句柄，可用于之后的 closedir()， readdir() 和 rewinddir() 调用中
(2)    写一个函数统计某个目录所有文件的大小!(包括子目录)
 */
// 遍历多层目录的递归函数
/*
 * @param $dir 参数是一个目录或文件
 */
function bianLiDir($dir)
{
    $dir = iconv('utf-8', 'gbk', $dir);
    if (is_dir($dir)) {
        $dir_handle = opendir($dir);
        while (($name = readdir($dir_handle)) !== false) {
            $name = iconv('utf-8', 'gbk', $name);
            if ($name != '.' && $name != '..') {
                if (is_dir($dir . $name)) {
                    // echo $dir . $name;
                    // exit;
                    echo $dir . $name . '是一个目录<br>';
                    bianLiDir($dir . $name);
                } else {
                    echo $dir . $name . '是一个文件<br>';
                }
            }
        }
    } else {
        echo $dir . '是一个文件<br>';
    }
}

$dir_full_path = 'd:/hspweb/';
/*if (is_dir($dir_full_path)) {
// 打开该目录
$dir_handle = opendir($dir_full_path);
// 开始遍历该目录(包括子文件和子文件夹)
while (false !== ($file_name = readdir($dir_handle))) {
if (is_dir($dir_full_path . $file_name)) {
echo $file_name . '是一个目录<br>';
} else {
echo $file_name . '是一个文件<br>';
}
}
} else {
echo '不是目录,无法打开<br>';
}*/
bianLiDir($dir_full_path);

/*
(1)    不管是windows还是linux/unix操作系统每个目录下都有 . 和 ..
(2)    一般情况下，操作系统会隐藏这个两个目录
(3)    . 和 .. 我们应该理解成他们不是真实目录， 而是分别代表 . 代表当前这个目录,   ..代表上一级目录.
(4)    可以联合使用 比如，我们希望找到当前目录的上一级目录  ../   ../../
 */
