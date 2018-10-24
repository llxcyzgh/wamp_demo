<?php
header("content-type:text/html;charset=utf-8");
// 数值型（bit）的使用
/*
mysql> create table test2(id int,num bit(8));
mysql> insert into test2(1,3);
mysql> insert into test2 values(2,65);
 */

/*
1、bit 在显示的时候，就是对应的 ascii 字符
2、如果有一个字段，只存入0或1，可以定义一个 bit(1)，这样可以节省空间
3、bit(M) M的范围是 1~64，也就是1~64位，（最大是8个字节）
 */
