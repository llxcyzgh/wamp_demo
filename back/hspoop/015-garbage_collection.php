<?php
header("content-type:text/html;charset=utf-8");
// 垃圾回收
/*
1. 在php中,当一个对象没有任何引用指向它的时候, 就会成为一个垃圾对象, php将启用垃圾回收器将对象销毁
2. 当程序退出前, php也将启用垃圾回收器, 销毁对象
 */
