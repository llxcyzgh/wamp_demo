<?php
header("content-type:text/html;charset=utf-8");
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 23:23
 */
/*
数据库比文件更有利于数据的管理
1、文件的安全性问题
2、文件不利于查询和对数据的管理
3、文件不利于存放海量数据
4、文件在程序中控制不方便
 */

/*
主流数据库介绍
数据库           公司        编程语言    项目大小        特点
sql server       微软        .net        中型和大型      性能高
Oracle           甲骨文      java        大型            适合处理复杂业务逻辑
mysql            sun/甲骨文  php         中型和大型      并发性好,不适合复杂
db2              IBM　                   大型            强悍
infomix          IBM　                   大型            银行系统,安全性高
sybase                　                 中型和大型      性能高
 */

/*
cmd控制台 连接数据库
>mysql -h localhost -u root -p

说明:
1、如果没有写 -h localhost , 则默认是连接本地
2、如果需要远程登陆到另一个 mysql, 则需要修改配置, 一般情况下不允许远程登陆
 */

/*
关闭和启动mysql
1、在 计算机->管理->服务 界面启动或停止
2、在 cmd控制台  net start mysql      net stop mysql
.    这里面的mysql是服务名,在安装的时候设置的服务名(默认是mysql,wamp安装的叫 wampmysql64)
 */

/*
数据库的三层结构
1、dbms [database mangement system 数据库管理系统]
2、db [database] 数据库, 对应文件夹
3、数据对象 [table  表] ,对应文件
 */

/*
SQL 语句类型
1、DDL 数据定义语句        例如: create、alter
2、DML 数据操作语句        例如: update、insert、delete
3、DQL 数据查询语句        例如: select
4、DCL 数据控制语句        例如: grant、revoke、commit、rollback
.    在数据库事务和mysql用户管理的时候用到DCL语句
 */

/*
练习:
1、创建一个名称为 db1 的数据库
mysql>create database db1;
.    当创建数据库时如果没有指定字符集和校验规则,则默认字符集为utf8; 校验规则为utf8_general_ci . [因为my.ini 文件中 default-character-set=utf8] utf8_general_ci 不区分大小写

2、创建一个使用 utf-8 字符集的 db2 数据库
mysql>create database db2 character set utf8;

3、创建一个使用 utf-8 字符集, 并带校对规则的 db3 数据库
mysql>create database db3 character set utf8 collate utf8_general_ci;

4、创建数据库的时候，不支持指定存储引擎，只能在创建表的时候指定

 */

/*
显示可用字符集
mysql>show character;

显示可用校验规则
mysql>show collation;

 */

/*
查看数据库默认编码
1. status;
2. show variables like 'char%';

 */
