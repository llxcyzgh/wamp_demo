<?php
header("content-type:text/html;charset=utf-8");
/*
MySQL的表类型由存储引擎（Storage ngines）决定，类型包括MyISAM、innoDB、BDB等。

MySQL 数据表主要支持六种类型 ，分别是：BDB、Memory、ISAM、MERGE、MYISAM、InnoBDB。(参考mysql文档.)
这六种又分为两类，一类是”事务安全型”(transaction-safe)，包括BDB和InnoDB；其余都属于第二类，称为”非事务安全 型”(non-transaction-safe)[mysiam 和 memory]。

 */

/*
(1)    MyISAM不支持事务、也不支持外键，但其访问速度快，对事务完整性没有要求，产生碎片处理. optimize table 表名

(2)    InnoDB存储引擎提供了具有提交、回滚和崩溃恢复能力的事务安全。但是比起MyISAM存储引擎，InnoDB写的处理效率差一些并且会占用更多的磁盘空间以保留数据和索引。

(3)    MEMORY存储引擎使用存在内存中的内容来创建表。 每个MEMORY表只实际对应一个磁盘文件。MEMORY类型的表访问非常得快，因为它的数据是放在内存中的，并且默认使用HASH索引。但是一旦服务关闭，表中的数据就会丢失掉, 表的结构还在 。
 */

/*
如何选择表的存储引擎

(1) 如果你的应用是不需要事务，处理的只是基本的CRUD操作，那么MyISAM是不二选择,速度快
(2) 一般来说，如果需要事务支持，InnoDB是不错的选择。
(3) Memory 存储引擎就是将数据存储在内存中，由于没有磁盘I./O的等待，速度极快。但由于是内存存储引擎，所做的任何修改在服务器重启后都将消失。(经典用法 用户的在线状态().
 */

// 修改表的存储引擎:
//  ALTER TABLE  `表名`  ENGINE = 储存引擎;
