<?php
header("content-type:text/html;charset=utf-8");
// scandir() 可以找到目录中的全部子目录和子文件(不包括孙级目录和文件)

define('DS', DIRECTORY_SEPARATOR); // 定义默认的路径分隔符

// 拷贝一个目录(里面包含多级子目录和子文件)
$src_dir = 'd:tnweb'; // 已存在
$des_dir = 'd:temp000'; // 待创建
copyDir($src_dir, $des_dir);

function copyDir($src_dir, $des_dir)
{
    if (is_dir($src_dir)) {
        if (!is_dir($des_dir)) {
            // 如果目标目标不存在,就创建
            mkdir($des_dir);
        }
        $dir_handle = opendir($src_dir);
        while (($name = readdir($dir_handle)) !== false) {
            if ($name != '.' && $name != '..') {
                if (is_dir($src_dir . DS . $name)) {
                    copyDir($src_dir . DS . $name, $des_dir . DS . $name);
                } else {
                    copy($src_dir . DS . $name, $des_dir . DS . $name);
                }
            }
        }
        closedir($dir_handle);
    } elseif (is_file($src_dir)) {
        copy($src_dir, $des_dir);
    } else {
        return false;
    }
}
