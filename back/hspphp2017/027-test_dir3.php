<?php
header("content-type:text/html;charset=utf-8");
/*
晚上的一个作业 [学习方法］
就是在d:/abc 目录，
1. 该目录下有 hello.txt 文件和 aaa 子目录，
2. aaa 子目录下有 tn.txt 和 tn2.txt 文件。
3. 把d:/abc 目录的拷贝，统计大小， 用示意图做一遍对大家理解非常有帮助
 */
define('DS', DIRECTORY_SEPARATOR);

function copyFullDir($dir_src, $dir_des)
{
    if (is_dir($dir_src)) {
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
                copyFullDir($dir_src . DS . $value, $dir_des . DS . $value);
            } elseif (is_file($dir_src . DS . $value)) {
                copy($dir_src . DS . $value, $dir_des . DS . $value);
            }
        }
        // 以下elseif 确保第一次进函数调用的源目录是目录或文件都可以得到处理,如果可以确定源目录确实是一个目录而不是一个文件或者不存在,则无需以下内容[也就是说,以下内容虽然出现在递归函数中,但是不会被递归调用到]
    } elseif (is_file($dir_src)) {
        copy($dir_src, $dir_des);
    } else {
        echo $dir_src . '是个无效的文件名或目录名<br>';
    }
}

$dir_src = 'd:abc';
$dir_des = 'd:xxx';
copyFullDir($dir_src, $dir_des);
