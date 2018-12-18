<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/1
 * Time: 10:05
 */
header('content-type:text/html;charset=utf-8');
//(2)  写一个函数统计某个目录所有文件的大小!(包括子目录)
// 遍历多层目录的递归函数
/*
 * @param $dir 参数是一个目录或文件
 */
function dirSize($dir)
{
    $size = 0;
    if (is_dir($dir)) {
        $dir_handle = opendir($dir);
        while (($name = readdir($dir_handle)) !== false) {
            if ($name != '.' && $name != '..') {
                if (is_dir($dir . $name . '/')) {
                    $size += dirSize($dir . $name .'/');
                } else {
                    $size += filesize($dir.$name);
                }
            }
        }
        closedir($dir_handle);
    } else {
        $size += filesize($dir);
    }
    return $size;
}

$dir_full_path = 'd:/tnweb/';
echo $dir_full_path . ' 里的文件大小是: ' . dirSize($dir_full_path) . ' 字节<br>';
echo $dir_full_path . ' 里的文件大小是: ' . round(dirSize($dir_full_path)/1024/1024,2) . ' MB';

/*
 * 关于递归调用有几个说明
1. 当程序调用一个函数时，就会开辟一个新栈.
2. 每个栈的数据是独立的，除非你是引用传递.
3. return 语句返回给谁，是谁调用，就返回给谁
 */

