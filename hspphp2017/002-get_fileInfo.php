<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/30
 * Time: 10:00
 */
/*
 * 如何获取到文件的大小,类型[文件/目录],文件修改、访问和创建时间等信息
 * 两种方式[一]
 */
// 设置默认时区
date_default_timezone_set('PRC');
// 1、定位文件的全路径
$file_full_path = "e:/abc.txt";

// 2、判断文件是否存在
if (file_exists($file_full_path)) {
    // 3、打开该文件
    /*
     * fopen() 函数是打开一个文件,获取到文件指针(资源)
     * @param string $file_full_path 文件路径
     * @param string 'r' 以只读方式打开
     * @return $fp 文件指针(资源) resource(3) of type (stream)
     */
    $fp = fopen($file_full_path, 'r');
    $file_info_arr = fstat($fp);
    var_dump($file_info_arr);
    echo '文件信息如下:<br>';
    echo '文件的大小是: ' . $file_info_arr['size'] . ' 字节<br>';
    echo '文件的访问时间是: ' . date('Y-m-d H:i:s',$file_info_arr['atime']) . '<br>';
    echo '文件的修改时间是: ' . date('Y-m-d H:i:s',$file_info_arr['mtime']) . '<br>';
    echo '文件的创建时间是: ' . date('Y-m-d H:i:s',$file_info_arr['ctime']) . '<br>';

    // 在php文件编程中,不是打开[fopen()文件就算访问,而是通过php程序来操作],比如 touch
    touch($file_full_path);
    echo '<hr>文件的访问时间是: ' . date('Y-m-d H:i:s',$file_info_arr['atime']) . '<br>';

}else{
    echo '文件不存在<br>';
}
