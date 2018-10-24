<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/5
 * Time: 10:09
 */
/*
（1）存储位置
cookie存储在客户端（浏览器），每次请求是随身携带，在setcookie时创建的
session存储在服务器端，session_start的时候创建的

（2）安全性
cookie每次随身携带，安全性不如session高

（3）生命周期：
Cookie的生命周期在setcookie时设置的
Session的生命周期在配置文件中的gc_maxlifetime设置，但是通过cookie里面携带的PHPSESSID找到的，这个cookie的有效期默认是0秒，也就是说一旦关闭了浏览器，cookie就失效了，下次访问会重新分配新的cookie

cookie的生命周期是累计的，session的生命周期是间隔的，以20分钟为例
cookie：1  2   3  4   .....  20分钟
session：1   2   3   4   ..... 19,如果从创建到第19分钟，重新访问了，会重新计算，也就是重新分配20分钟


*/