<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/5
 * Time: 16:20
 */
/*
 预处理流程
（1）	先使用占位符代替id的值
（2）	再预处理，也就是就是固定sql语句的结构
（3）	再绑定真实的数据（使用真实的数据替换占位符）
（4）	执行sql
 */
$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = '';
$pdo = new PDO($dsn, $user, $pass);

// 执行删除操作
//$sql = "DELETE FROM `user` WHERE id=1 || 1=1";

// 1.先用占位符替代变量部分
$sql = "DELETE FROM `user` WHERE id=?";// 占位符有两种方式(? 或 :id),其中的id为任意字符
// 2.执行预处理函数prepare
$pdo_stat = $pdo->prepare($sql);
// 3.使用真实值替换占位符
$pdo_stat->bindValue(1,'1 || 1=1');
// 4.执行
$pdo_stat->execute();