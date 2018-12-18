<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/30
 * Time: 15:42
 */
// 第一种方法是一次性将文件读取到内存中,这样对于大文件不好处理,由此用第二种读取文件的方式(可以设置缓冲)
// 1、定位文件的全路径
$file_full_path = "e:/abc.txt";

if(file_exists($file_full_path)){
    $fp = fopen($file_full_path,'r');

    // 设置缓冲
    $buffer = '';
    $buffer_size = 1024;
    $con_str = '';

    // 开始一次读取$buffer_size,循环读取
    // !feof($fp) 如果没有到文件的结束位置,就继续读取
    while(!feof($fp)){
        $buffer = fread($fp,$buffer_size);
        // 程序员可以根据需要,在这里对$buffer处理
        $con_str .= $buffer;
    }
    fclose($fp);
    // 替换换行和Tab
    $con_str = str_replace("\r\n",'<br>',$con_str);
    $con_str = str_replace("\n",'<br>',$con_str);
    $con_str = str_replace("\t",'&nbsp;&nbsp;&nbsp;&nbsp;',$con_str);

    // 输出文件内容
    echo $con_str;
}else{
    echo '文件不存在,无法读取<br>';
}