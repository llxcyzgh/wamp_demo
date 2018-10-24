<?php
header("content-type:text/html;charset=utf-8");
// 数值型（小数）的基本使用
/*
1、float(M,D)[unsigned]
.    M 指定显示长度，D 指定小数位数，占用空间4个字节
.     小数：float(4,2)，表示的范围是 [-99.99,99.99]
.     小数：float(4,2) unsigned，表示的范围是[0,99.99]

说明：
(1) 当float(4,2) 时，会对insert 进去的小数进行四舍五入保留两位小数，然后查看是否超出范围，比如 99.994就不会超出，99.995就会超出

(2) 如果 float(4,2) unsigned 时，就为无符号小数，范围是 [0,99.99]
 */

/*
2、decimal(M,D)[unsigned]
.    M 指定显示长度，D 指定小数点的位数
.     小数：decimal(10,8)，表示的范围是 -999.99~999.99
.     小数：decimal(10,8) unsigned，表示的范围是 0~999.99

decimal 与 float 的区别：
1、decimal的精度大于float
float 单精度精确到大约7位小数以内
2、decimal 整数最大位数（M）为65。支持的小数最大位数（D）是30。如果D被省略，是0。如果M被省略，默认是10
 */
