<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/31
 * Time: 20:49
 */
/*
修改文件分类:
(1) 修改文件内容，一般就是对该文件写入新的内容 fopen().
(2) 修改文件名字 rename() [对于中文名,需要进行转码操作]
*/

// 修改文件名
$file_full_path = 'e:中文.txt';
$file_full_path = iconv('utf-8','gbk',$file_full_path);
// 中文改名会出现乱码. 因为文件函数是比较早期的函数,对gbk,gb2312支持比较好,对utf8支持不够,因此需要会用转码
// 将 e:中文.txt  => gbk
$file_new_full_path = 'e:不是中文.txt';
// iconv()函数,将字符串按要求的字符编码来转换
$file_new_full_path = iconv('utf-8','gbk',$file_new_full_path);

if(file_exists($file_full_path)){
    if(rename($file_full_path,$file_new_full_path)){
        echo '改名成功<br>';
    }else{
        echo '改名失败<br>';
    }
}else{
    echo '文件不存在, 无法改名<br>';
}

