<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/30
 * Time: 11:48
 */
/*
 * 1. 读取文件的内容,并显示在网页[三种方式]
 * 读文件操作常用函数:
 * fread(), file_get_contens(), feof(), str_replace(), parse_ini_file()
 */
/*
 * 2. 读取文 属性=属性值 的文件
 */

// 1、定位文件的全路径
$file_full_path = "e:/abc.txt";

if(file_exists($file_full_path)){
    // 2、打开文件
    $fp = fopen($file_full_path,'r');
    // 3、获取文件的大小
    $file_size = filesize($file_full_path);
    // 4、读取内容
    /*
     * fread(): 读取一个文件的内容
     * @param stream $fp 表示文件资源
     * @param int $file_size 表示从$fp读取多少个字节
     * */
    $con_str = fread($fp,$file_size);
    // 及时关闭文件!!!重要
    fclose($fp);
    // 5、显示在网页
//    echo '<pre>';
    // 在windows系统下,文件中换行是 \r\n  [换行和回车]
    // 在linux系统下,文件中换行是 \n      [换行]
    // 在mac系统下,文件中换行是 \n        [换行]
    // 在网页中,换行是 <br>
    $con_str = str_replace("\r\n",'<br>',$con_str);
    $con_str = str_replace("\n",'<br>',$con_str);
    // 替换tab键,在windows系统下,文件中TAB是 \t
    $con_str = str_replace("\t",'&nbsp;&nbsp;&nbsp;&nbsp;',$con_str);
    echo $con_str;
}