<?php
header("content-type:text/html;charset=utf-8");
/*
晚上的一个作业 [学习方法］
就是在d:/abc 目录，
1. 该目录下有 hello.txt 文件和 aaa 子目录，
2. aaa 子目录下有 tn.txt 和 tn2.txt 文件。
3. 把d:/abc 目录的拷贝，统计大小， 用示意图做一遍对大家理解非常有帮助
 */
// 改进,把真正的递归部分封装成一个函数,形成两个函数的嵌套
define('DS', DIRECTORY_SEPARATOR);

function copyFullDir($dir_src, $dir_des)
{
    if (is_dir($dir_src)) {
        real($dir_src, $dir_des);
        echo $dir_src . '&nbsp;&nbsp;&nbsp;&nbsp;是个目录[已完成复制]<br>';
    } elseif (is_file($dir_src)) {
        copy($dir_src, $dir_des);
        echo $dir_src . '&nbsp;&nbsp;&nbsp;&nbsp;是个文件[已完成复制]<br>';
    } else {
        echo $dir_src . '&nbsp;&nbsp;&nbsp;&nbsp;是个无效的文件名或目录名<br>';
    }
}

function real($dir_src, $dir_des)
{
    if (!is_dir($dir_des)) {
        // 如果目标目录不存在,就创建一个
        mkdir($dir_des);
    }

    $arr = scandir($dir_src);
    foreach ($arr as $value) {
        if ($value == '.' || $value == '..') {
            continue;
        }
        //如果下一级还是目录,就递归;不是则直接复制文件
        if (is_dir($dir_src . DS . $value)) {
            real($dir_src . DS . $value, $dir_des . DS . $value);
        } elseif (is_file($dir_src . DS . $value)) {
            copy($dir_src . DS . $value, $dir_des . DS . $value);
        }
    }
}

$dir_src = 'd:abc';
$dir_des = 'd:xxx01';
copyFullDir($dir_src, $dir_des);
