<?php
header("content-type:text/html;charset=utf-8");
// scandir() 可以找到目录中的全部子目录和子文件(不包括孙级目录和文件)

define('DS', DIRECTORY_SEPARATOR); // 定义默认的路径分隔符

// 拷贝一个目录(里面包含多级子目录和子文件)
$src_dir = 'd:tnweb'; // 已存在
$des_dir = 'd:temp000'; // 待创建
copyDir($src_dir, $des_dir);

function copyDir($src, $des)
{
    mkdir($des, 0777, true);
    $arr = scandir($src);
    $len = count($arr);
    if ($len != 2) {
        // $src不是一个空目录
        for ($i = 2; $i < $len; $i++) {
            // $arr[$i]是一个目录,就复制
            if (is_dir($src . DS . $arr[$i])) {
                copyDir($src . DS . $arr[$i], $des . DS . $arr[$i]);
            } else {
                // $arr[$i]是一个文件,就复制文件
                copy($src . DS . $arr[$i], $des . DS . $arr[$i]);
            }
        }
    }
}
