<?php
header("content-type:text/html;charset=utf-8");
// 练习: 遍历显示某个文件夹下所有的文件和目录名 /
define('DS', DIRECTORY_SEPARATOR);

function traversalDir($dir)
{
    if (is_file($dir)) {
        echo $dir . '&nbsp;&nbsp;&nbsp;&nbsp;是一个文件<br>';
    } elseif (is_dir($dir)) {
        # 是一个目录,就打开opendir并readdir
        $dir_handle = opendir($dir);
        while (false !== ($filename = readdir($dir_handle))) {
            if ($filename != '.' && $filename != '..') {
                if (is_dir($dir . DS . $filename)) {
                    echo $dir . DS . $filename . '&nbsp;&nbsp;&nbsp;&nbsp;是一个目录<br>';
                    traversalDir($dir . DS . $filename);
                } elseif (is_file($dir . DS . $filename)) {
                    echo $dir . DS . $filename . '&nbsp;&nbsp;&nbsp;&nbsp;是一个文件<br>';
                }
            }
        }
        closedir($dir_handle);
    }
}

$dir = 'd:tnweb';
traversalDir($dir);
