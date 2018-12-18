<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/4
 * Time: 19:21
 */

// 	sesssion的GC垃圾回收机制  [garbage collection]

/*
Session的垃圾回收机制，是当session_start()的时候，会先判断哪些session文件已经过期，当session超过有效期之后，就会触发垃圾回收机制，并不是直接把过期的session文件都删除，而是有概率的删除，那么这个概率是怎么计算的？
 删除的概率 = propability / divisor

例如：
将gc_propability 设置为1000，将gc_divisor设置为1000，将gc_maxlifetime设置为60，表示在60秒内如果没有做任何操作，说明该session文件过期了，删除的概率是1, 也就是 100% 删除

*/
