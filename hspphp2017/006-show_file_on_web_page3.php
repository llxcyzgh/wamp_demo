<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/30
 * Time: 16:21
 */
// 第三种方法最简洁,使用最多 file_get_contents  file_put_contents
// 不适合大文件,如果是大文件[10M 或5M 以上],还是第二种方式设置缓冲比较好
// 1、定位文件的全路径
$file_full_path = "e:/abc.txt";

if(file_exists($file_full_path)){
    // file_get_contents() 相当于前面 fopen(),fread(),fclose() 的封装
    $con_str = file_get_contents($file_full_path);
    // 替换换行和Tab
    $con_str = str_replace("\r\n",'<br>',$con_str);// 对windows系统
    $con_str = str_replace("\n",'<br>',$con_str);// 对linux和mac系统
    $con_str = str_replace("\t",'&nbsp;&nbsp;&nbsp;&nbsp;',$con_str);

    echo $con_str;
}else{
    echo '文件不存在<br>';
}