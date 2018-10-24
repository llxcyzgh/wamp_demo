<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/31
 * Time: 0:17
 */
/*
练习:
写文件操作 fwrite()  file_put_contents() ,两种方式
说明: 写文件的同时，也可以在打开文件时(fopen)，创建文件

基本使用案例
1. 如果文件不存在,创建一个新文件，写入内容 10句 'hello,world'，如果已经存在这个文件，则写入10句 "你好，泰牛"
2. 如果已经存在，在文件后添加10句 '你好，苹果!';
3. 使用file_put_contents完成写文件的任务.
 */
$file_full_path = 'e:myhtllo.txt';
if (!file_exists($file_full_path)) {
    // 文件不存在
    $con = '';
    for ($i = 0; $i < 10; $i++) {
        $con .= "hello,world\r\n";
    }
    // file_put_contents() 相当于一个 fopen(),fwrite(),fclose()的封装
    /* file_put_contents()函数
     * 1. 当文件不存在时,就会先创建,再写入
     * 2. 当文件存在时,默认会覆盖写入
     * 3. 当文件存在时,如果希望追加写入,则加上    file_put_contents($file_full_path, $con,FILE_APPEND);
     */
    file_put_contents($file_full_path, $con);
    echo '文件不存在,写入10句\'hello,world\'成功<br>';
} else {
    // 文件存在
    $con = '';
    for ($i = 0; $i < 10; $i++) {
        $con .= "你好，苹果\r\n";
    }
    // 覆盖写入
//    file_put_contents($file_full_path, $con);
//    echo '文件存在, 覆盖写入10句 \'你好，泰牛\' 成功<br>';

    // 追加写入
    file_put_contents($file_full_path, $con,FILE_APPEND);
    echo '文件存在, 追加写入10句 \'你好，苹果\' 成功<br>';


}