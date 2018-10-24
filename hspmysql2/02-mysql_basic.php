<?php
header("content-type:text/html;charset=utf-8");
/**
显示数据库语句：
show databases;

显示数据库创建语句
show create database db_name

删除数据库语句
drop database [if exists] db_name;

查看当前mysql数据库连接进程情况
show processlist;
 */

/**
备份、恢复数据库
备份：
>mysqldump -u -p db100 > e:/db100.bak

恢复：
mysql>create database db100;
mysqyl>use db100;
mysqyl>source e:/db100.bak;


备份细节：
（1）如果只希望备份一个数据库的某几张表
cmd>mysqldump -u root -p 数据库名 表1名 表2名 > e:/db100_abc_test.bak
cmd>mysqldump use db100;
cmd>mysqldump source e::/db100_abc_test;

（2）如果希望同时备份多个数据库
cmd>mysqldump -u root -p -B 数据库名1 数据库名2 > e:/db100_abc_test.bak

ps: 如果在备份一个数据库的时候，也带上一个 -B，则不需要重新创建一个database，直接source即可
 */

/*
一台电脑上最多有65535个端口
一个端口是使用两个字节表示
一个字节8位，两个字节16位
2^16-1 = 65535
 */
