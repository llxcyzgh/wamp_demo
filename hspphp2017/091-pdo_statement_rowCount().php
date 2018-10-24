<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/5
 * Time: 17:02
 */

//实例化pdo对象
$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = '';
$pdo = new PDO($dsn, $user, $pass);

//获得执行增删改受影响的记录数
$sql = "UPDATE user SET password=md5('admin123')";
//获得pdo_statement对象（query、prepare）
$pdo_statement = $pdo->prepare($sql);

//一定别忘了执行一下
$pdo_statement->execute();


$result = $pdo_statement->rowCount();
var_dump($result);