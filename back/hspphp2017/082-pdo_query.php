<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/5
 * Time: 13:55
 */

$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = '';
$pdo = new PDO($dsn, $user, $pass);

$sql = "SELECT * FROM `user`";
$pdo_statement = $pdo->query($sql);
//var_dump($pdo_statement);
/*
PDOStatement对象提供了3个方法查询数据：

	fetch()，获取一条数据
	fetchAll()，获取所有数据
	fetchColumn()，获取一列数据（一个字段的数据）[首行]
 */

$res = $pdo_statement->fetch(PDO::FETCH_ASSOC);
//$res = $pdo_statement->fetch(PDO::FETCH_NUM);
//$res = $pdo_statement->fetch(PDO::FETCH_BOTH);
//$res = $pdo_statement->fetchAll();
//$res = $pdo_statement->fetchColumn(0);
var_dump($res);