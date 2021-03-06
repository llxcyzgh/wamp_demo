<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/30
 * Time: 22:39
 */
/*
在php中，没有一个专门的函数来创建文件。是通过fopen函数来实现.
function fopen($file_name, $mode);
说明$mode取值:
(1)	$mode 值 'r' ,  表示只读方式打开，将文件指针指向文件头.
(2)	$mode 值 'r+',  表示读写方式打开，将文件指针指向文件头.
(3)	$mode 值 'w' ,  写入方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之
(4)	$mode 值 'w+',  读写入方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之
(5)	$mode 值 'a' ,  写入方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之
(6)	$mode 值 'a+',  读写入方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之

用的最多的是 'r' , 'w' , 'a'
 */

/*
练习:
写文件操作 fwrite()  file_put_contents() ,两种方式
说明: 写文件的同时，也可以在打开文件时(fopen)，创建文件

基本使用案例
1. 创建一个新文件，写入内容 10句 'hello,world'
2. 给存在的文件中，将原来的内容覆盖成新的内容10句 "你好，泰牛"
3. 打开一个已经存在的文件，在原来的内容追加内容'ABC! ENGLISH!';

 */