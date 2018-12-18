<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/5
 * Time: 15:37
 */

/*
什么是事务：
一组DML语句的集合，事务有4个特点，原子性、一致性、隔离性、持久性
事务就是逻辑上的一组操作，这组操作的各个单元要么全部成功、那么全部失败，使用事务的时候，数据表的存储引擎必须是INNODB类型的


事务的使用步骤：
	开启事务：begin
	如果各个单元全部成功：commit
	如果任何一个单元失败：rollback

use php_7;
create table cash(
id int unsigned primary key auto_increment,
name varchar(32),
money decimal(10,2)
)engine=innodb default charset=utf8;

INSERT INTO `cash` values(null,'宋江',10000),(null,'林冲',3000);

 */

$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = '';
$pdo = new PDO($dsn, $user, $pass);

// 先开启事务
$pdo->beginTransaction();

$sql = "UPDATE `cash` SET money=money-1000 WHERE id=1";
$res1 = $pdo->exec($sql);

$sql = "UPDATE `cash` SET money=money+1000 WHERE id=2";
$res2 = $pdo->exec($sql);

if ($res1 && $res2) {
    $pdo->commit();
} else {
    $pdo->rollBack();
}
